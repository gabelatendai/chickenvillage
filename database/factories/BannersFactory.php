<?php

use Faker\Generator as Faker;

$factory->define(App\Banners::class, function (Faker $faker) {
    return [
        'headline' => $faker->sentence(3),
        'sub_headline' => $faker->sentence(5),
        'image'=>'uploads/banners/18.jpg',
        'description' => $faker->paragraph(4),

    ];
});
