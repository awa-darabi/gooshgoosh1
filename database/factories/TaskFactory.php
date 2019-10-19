<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Task;
use Faker\Generator as Faker;


$factory->define(Task::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'who' => $faker->name,
        'ticketNo' => $faker->randomDigit,
        'userId' => $cinderella->id,
        'definition' => $faker->sentence,
        'createdAt' => $faker->unixTime,
        'updatedAt' => $faker->unixTime,
        'currentStatus' => 1
    ];
});