<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Location;

$factory->define(Location::class, function (Faker $faker) {
    return [

      'name' => $faker -> country,
      'address' => $faker -> streetAddress,
      'city' => $faker -> city

    ];
});
