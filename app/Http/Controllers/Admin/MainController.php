<?php
/**
 * Created by PhpStorm.
 * User: hatamiarash7
 * Date: 2018-07-15
 * Time: 17:21
 */

namespace App\Http\Controllers\Admin;


use App\Building;
use App\Floor;
use App\Good;
use App\Http\Controllers\Controller;
use App\Responsible;
use App\Room;

class MainController extends AdminController
{
	public function index()
	{
		$productCount = Good::all()->count();
		$responsibleCount = Responsible::all()->count();
		$roomCount = Room::all()->count();
		$buildingCount = Building::all()->count();
		$floorCount = Floor::all()->count();
		$healthyProducts = Good::whereStatus("healthy")->count();
		$brokenProducts = Good::whereStatus("broken")->count();

		return view('admin.home', compact(
			'productCount',
			'responsibleCount',
			'roomCount',
			'buildingCount',
			'floorCount',
			'healthyProducts',
			'brokenProducts'
		));
	}
}