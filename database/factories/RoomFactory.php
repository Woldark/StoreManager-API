<?php

use Faker\Generator as Faker;

$factory->define(App\Room::class, function (Faker $faker) use ($factory) {
	return [
		'name' => $faker->firstName,
		'barcode' => $faker->randomNumber(8, true)
	];
});