<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;
use App\Question;
use App\User;

$factory->define(App\Question::class, function (Faker $faker) {
    return [
        'body'=>$faker->paragraph($nbSentences = 3, $variablelengthSentences = true),
    ];
});
