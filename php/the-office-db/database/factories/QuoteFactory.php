<?php

use App\Models\Quote;
use Faker\Generator as Faker;

$factory->define(Quote::class, function (Faker $faker) {
    return [
        'key' => Str::slug($faker->sentence),
        'value' => $faker->sentence,
    ];
});
