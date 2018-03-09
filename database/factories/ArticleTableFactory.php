<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(10),
        'category_id' => App\Category::all()->random()->id,
        'image' => 'default.png',
        'user_id' => App\User::all()->random()->id,
        'content' => $faker->paragraph(random_int(5, 10))
    ];
});
