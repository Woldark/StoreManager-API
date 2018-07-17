<?php

use Faker\Generator as Faker;

$factory->define(App\Building::class, function (Faker $faker) use ($factory) {
	return [
		'name' => $faker->firstName,
	];
});