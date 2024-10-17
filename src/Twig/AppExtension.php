<?php


// src/Twig/AppExtension.php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Twig\TwigTest;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('dis', [$this, 'formatDistance']),
        ];
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('time', [$this, 'formatTime']),
        ];
    }

    public function getTests()
    {
        return [
            new TwigTest('win', [$this, 'formatWin'])
        ];
    }

    public function formatDistance(string $number): string
    {

        $dis = (float)explode('m', $number)[0];
        $dis *= 3.280839895;


        return round($dis, 2) . 'ft';
    }

    public function formatTime(string $seconds): string
    {
        $sec = (int)explode('s', $seconds)[0];
        $minutes = (int)($sec / 60);
        $seconds = $sec % 60;
        return $minutes . 'min ' . $seconds . 'sec';
    }

    public function formatWin(int $test)
    {
        return (($test === 1));
    }
}
