<?php

use Breuermarcel\Survey\Models\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'content' => $faker->name,
    ];
});
