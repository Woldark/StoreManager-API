<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) use ($factory) {
	return [
		'name' => "آرش حاتمی",
		'email' => "hatamiarash7@gmail.com",
		'password' => bcrypt("3920512197")
	];
});