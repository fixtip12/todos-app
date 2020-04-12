<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'description'=> $faker->paragraph(4),
        'completed' => false
    ];
});
