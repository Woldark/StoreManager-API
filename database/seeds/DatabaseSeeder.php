<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		factory(\App\Building::class, rand(1, 10))
			->create()
			->each(function (\App\Building $building) {
				$building->floors()->saveMany(
					factory(\App\Floor::class, rand(5, 15))
						->make(['building_id' => $building->id])
						->each(function (\App\Floor $floor) {
							$floor->rooms()->saveMany(
								factory(\App\Room::class, rand(15, 30))
									->make(['floor_id' => $floor->id])
							);
						})
				);
			});
	}
}
