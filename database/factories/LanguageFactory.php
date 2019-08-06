<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Language;
use Faker\Generator as Faker;

 
$factory->define(Language::class, function (Faker $faker) {    
    $text =     new \Faker\Provider\en_US\Text($faker);
    return [        
        /* 'lang' => 'english',        
        'main_title' => $text->realText($maxNbChars = 50),
        'main_desc' => $text->realText($maxNbChars = 300), */

        'lang' => 'tagalog',
        'main_title' => 'Ano ang Laravel?',
        'main_desc' => 'Ang Laravel ay isang libre, bukas na mapagkukunan ng web web framework, na nilikha ni Taylor Otwell at inilaan para sa pagbuo ng mga aplikasyon ng web kasunod ng modelo-view-controller na pattern ng arkitektura at batay sa Symfony.',
    ];
});
