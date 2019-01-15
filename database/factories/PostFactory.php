<?php

use Faker\Generator as Faker;

$factory->define(\App\Post::class, function (Faker $faker, $user_id) {
    return [
        'user_id' => $user_id,
        'title' => str_random(10),
        'content' => $faker->realText(1000)
    ];
});
