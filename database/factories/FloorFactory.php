<?php

use Faker\Generator as Faker;

$factory->define(App\Floor::class, function (Faker $faker) use ($factory) {
	return [
		'name' => $faker->firstName,
	];
});