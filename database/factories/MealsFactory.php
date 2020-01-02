<?php

use Faker\Generator as Faker;


$factory->define(App\Meals::class, function (Faker $faker) {
    return [
        'food_name' => $faker->sentence(3),
        'meal' => $faker->sentence(2),
        'image'=>'uploads/23.jpg',
        'description' => $faker->paragraph(4),
        'price' => $faker->numberBetween(5,50)
    ];
});
/*
$factory->define(Model::class, function (Faker $faker) {
    return [

    ];
});
*/