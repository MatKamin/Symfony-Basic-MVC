<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Config\Definition\IntegerNode;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Controller extends AbstractController
{
    public function main()
    {
        return $this->render('main.html.twig', ['tournaments' => $this->tournaments]);
    }

    public function tournament($id)
    {
        $rounds = [];
        $tournament = $this->tournaments[$id - 1];
        for ($i = $tournament['rounds'][0] - 1; $i < $tournament['rounds'][count($tournament['rounds']) - 1]; $i++) {
            if (count($this->rounds) > $i) {
                $rounds[] = $this->rounds[$i];
            }
        }
        return $this->render('tournament.html.twig', [
            'tournament' => $tournament,
            'rounds' => $rounds,
        ]);
    }

    public function results($id, $tournament, $round)
    {
        return $this->render('results.html.twig', [
            'round' => $this->rounds[$id - 1],
            'tournament' => $this->tournaments[$tournament],
            'r' => $round,

        ]);
    }

    private $tournaments = [
        [
            'name' => 'Tournament 2018',
            'rounds' => [1, 2, 3],
            'id' => 0,
        ],
        [
            'name' => 'Tournament 2020',
            'rounds' => [4, 5],
            'id' => 1,
        ],
    ];

    private $rounds = [
        [
            [
                'name' => 'Cristian R.',
                'dis' => '100m',
                'time' => '100s',
                'plane' => 'normal plane',
                'pic' => 'cristian-r'
            ],
            [
                'name' => 'Lion M.',
                'dis' => '99m',
                'time' => '99s',
                'plane' => 'weird plane',
                'pic' => 'lion-m',
            ],
            [
                'name' => 'Robert L.',
                'dis' => '98m',
                'time' => '98s',
                'plane' => 'normal plane',
                'pic' => 'robert-l',
            ],
            [
                'name' => 'Viktor K.',
                'dis' => '97m',
                'time' => '97s',
                'plane' => 'what?',
                'pic' => 'viktor-k',
            ],
        ],
        [
            [
                'name' => 'Lion M.',
                'dis' => '100m',
                'time' => '100s',
                'plane' => 'normal plane',
                'pic' => 'lion-m',
            ],
            [
                'name' => 'Cristian R.',
                'dis' => '99m',
                'time' => '99s',
                'plane' => 'weird plane',
                'pic' => 'cristian-r',
            ],
            [
                'name' => 'Viktor K.',
                'dis' => '98m',
                'time' => '98s',
                'plane' => 'normal plane',
                'pic' => 'viktor-k',
            ],
            [
                'name' => 'Robert L.',
                'dis' => '97m',
                'time' => '97s',
                'plane' => 'what?',
                'pic' => 'robert-l',
            ],
        ],
        [
            [
                'name' => 'Robert L.',
                'dis' => '100m',
                'time' => '100s',
                'plane' => 'normal plane',
                'pic' => 'robert-l',
            ],
            [
                'name' => 'Viktor K.',
                'dis' => '99m',
                'time' => '99s',
                'plane' => 'weird plane',
                'pic' => 'viktor-k',
            ],
            [
                'name' => 'Cristian R.',
                'dis' => '98m',
                'time' => '98s',
                'plane' => 'normal plane',
                'pic' => 'cristian-r',
            ],
            [
                'name' => 'Lion M.',
                'dis' => '97m',
                'time' => '97s',
                'plane' => 'what?',
                'pic' => 'lion-m',
            ],
        ],
        [
            [
                'name' => 'Cristian R.',
                'dis' => '105m',
                'time' => '99s',
                'plane' => 'normal plane',
                'pic' => 'cristian-r',
            ],
            [
                'name' => 'Lion M.',
                'dis' => '97m',
                'time' => '97s',
                'plane' => 'what?',
                'pic' => 'lion-m',
            ],
        ],
        [
            [
                'name' => 'Lion M.',
                'dis' => '108m',
                'time' => '97s',
                'plane' => 'what?',
                'pic' => 'lion-m',
            ],
            [
                'name' => 'Cristian R.',
                'dis' => '104m',
                'time' => '99s',
                'plane' => 'normal plane',
                'pic' => 'cristian-r',
            ],
        ],
    ];
}
