<?php

use Faker\Generator as Faker;

$factory->define(App\Videos::class, function (Faker $faker) {
    return [
        'name'	=>	$faker->sentence,
        'description'	=>	$faker->sentence
    ];
});
