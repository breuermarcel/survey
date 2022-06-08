<?php

use Breuermarcel\Survey\Models\Answer;
use Faker\Generator as Faker;

$factory->define(Answer::class, function (Faker $faker) {
    return [
        'value' => $faker->words(3, true),
        'question_id' => factory(Question::class)->create()->id,
    ];
});
