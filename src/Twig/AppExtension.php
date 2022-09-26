<?php


// src/Twig/AppExtension.php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class AppExtension extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('dis', [$this, 'formatDistance']),
        ];
    }

    public function formatDistance(string $number): string
    {

        $dis = (float)explode('m', $number)[0];
        $dis *= 3.280839895;


        return round($dis,2).'ft';
        
    }
}