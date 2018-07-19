<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	protected $floors;

	public function run()
	{
		factory(\App\User::class, 1)->create();

		factory(\App\Building::class, rand(1, 10))
			->create()
			->each(function (\App\Building $building) {
				$building->floors()->saveMany(
					$this->floors = factory(\App\Floor::class, rand(5, 15))
						->make(['building_id' => $building->id])
				);
			});

		foreach ($this->floors as $floor) {
			$floor->rooms()->saveMany(
				factory(\App\Room::class, rand(15, 30))
					->make(['floor_id' => $floor->id])
			);
		}
	}
}
