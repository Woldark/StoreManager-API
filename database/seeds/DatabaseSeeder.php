<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	public function run()
	{
		factory(\App\User::class, 1)->create();

		factory(\App\Building::class, rand(3, 10))
			->create()
			->each(function (\App\Building $building) {
				$building->floors()->saveMany(
					factory(\App\Floor::class, rand(2, 4))
						->create(['building_id' => $building->id])
						->each(function (\App\Floor $floor) {
							$floor->rooms()->saveMany(
								factory(\App\Room::class, rand(10, 20))
									->create(['floor_id' => $floor->id])
							);
						})
				);
			});
	}
}
