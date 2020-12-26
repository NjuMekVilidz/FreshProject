<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\InstagramProfile;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(InstagramProfile::class, function (Faker $faker) {
    return [
        'profile_name' => $faker->userName,
        'profile_image' => 'images/something.jpg',
        'verified' => true|false,
        'user_id' => (int)Str::random(10)
    ];
});
