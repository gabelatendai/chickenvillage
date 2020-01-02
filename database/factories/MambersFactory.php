<?php

use Faker\Generator as Faker;

$factory->define(App\Teams::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
          'image'=>'uploads/23.jpg',
        'role' => $faker->sentence(2),
        'pnumber' => $faker->numberBetween(5,50)
    ];
});
