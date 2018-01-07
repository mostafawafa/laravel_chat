<?php

use Faker\Generator as Faker;

$factory->define(App\Notification::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'body' => $faker->paragraph(5)
    ];
});
