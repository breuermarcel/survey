<?php

use Breuermarcel\Survey\Models\Survey;
use Faker\Generator as Faker;

$factory->define(Survey::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
