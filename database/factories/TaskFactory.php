<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Task;

$factory->define(Task::class, function (Faker $faker) {
  return [

    'name' => $faker -> firstName(),
    'description' => $faker -> text($maxNbChars = 200),
    'start_date' => $faker -> date(),
    'end_date' => $faker -> date()
    
  ];
});
