<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request, $id = 1)
    {
        return view('home', compact('id'));
    }

    public function about(Request $request, $id = 2)
    {
        return view('home', compact('id'));
    }

    public function downloads(Request $request, $id = 3)
    {
        return view('home', compact('id'));
    }

    public function gallery(Request $request, $id = 4)
    {
        $mobs = json_decode(json_encode($this->mobs()), FALSE);
        return view('home', compact('id', 'mobs'));
    }

    public function downloadLinks()
    {
        return array(
            '1' => array(
                'link' => '',
                'version' => '1'
            )
            );
    }

    public function mobs()
    {
        return array(
            '1' => array(
                'name' => 'Water Dragon',
                'life' => 0,
                'image' => '/images/water_dragon.gif',
                'text' => 'Aquatic reptile, found in every water sources, strong swimmer, agressive diet, territorial.'
            ),
            '2' => array(
                'name' => 'Robo Pounder',
                'life' => 300,
                'image' => '/images/robo-pounder-walking.gif',
                'text' => 'Artificially intelligent machine, capable of performing tasks agressively without human guidance.'
            ),
            '3' => array(
                'name' => 'Robo Jeffrey',
                'life' => 0,
                'image' => '/images/robo_jeffrey.gif',
                'text' => 'Hostile robot behavior towards humans or other creatures, programmed to attack till the end of life.'
            ),
            '4' => array(
                'name' => 'Rotator',
                'life' => 0,
                'image' => '/images/rotator.gif',
                'text' => 'mechanical device that rotates objects, often used for attacking humans.'
            ),
            '5' => array(
                'name' => 'Mantis',
                'life' => 0,
                'image' => '/images/mantis.gif',
                'text' => 'A predatory insect with a spiky body, elongated forelegs for hunting, and excellent camouflage abilities.'
            ),
            '6' => array(
                'name' => 'Celestial Squid',
                'life' => 0,
                'image' => '/images/celestial_squid.gif',
                'text' => 'Marine mollusk with a soft body, eight arms, two tentacles, a beak, and ink sac.'
            ),
            '7' => array(
                'name' => 'Whale',
                'life' => 120,
                'image' => '/images/whale.png',
                'text' => 'Streamlined, marine mammal, smooth skin, large size, vocalizations, found in all oceans, ecosystem role.'
            ),
            '8' => array(
                'name' => 'Peacock',
                'life' => 0,
                'image' => '/images/peacock.png',
                'text' => 'Peacock has a vivid iridescent tail, used in courtship displays, prominent tail feathers, and elaborate courtship displays.'
            ),
            '9' => array(
                'name' => 'Kraken',
                'life' => 0,
                'image' => '/images/kraken.png',
                'text' => 'Legendary sea monster of Norse mythology, often depicted as a giant squid or octopus.'
            ),
        );
    }
}
