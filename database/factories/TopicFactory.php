<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Topic::class, function (Faker $faker) {

    $sentence = $faker->sentence;

    $updated_time = $faker->dateTimeThisMonth();

    $created_at = $faker->dateTimeThisMonth($updated_time);

    return [
        'title'        => $sentence,
        'body'         => $faker->text,
        'excerpt'      => $sentence,
        'background'   => public_path('uploads/images/image_2.jpg'),
        'created_at'   => $created_at,
        'updated_at'   => $updated_time,
    ];
});
