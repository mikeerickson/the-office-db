<?php

use App\Models\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'key' => Str::slug($faker->sentence),
        'value' => $faker->sentence,
    ];
});
