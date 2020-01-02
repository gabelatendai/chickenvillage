<?php

use Faker\Generator as Faker;

$factory->define(App\Drinks::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'price' => $faker->numberBetween(5,20),
        'image'=>'uploads/drinks/18.jpg',
        'description' => $faker->paragraph(4),
    ];
});
