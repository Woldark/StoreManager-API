<?php

namespace App\Http\Controllers;

use App\Floor;
use Illuminate\Http\Request;

class FloorController extends Controller
{
	public function index()
	{
		$floors = Floor::all();
		return response()->json([
			'error' => false,
			'floors' => $floors
		], 200);
	}

	public function show($floor)
	{
		$floor = Floor::find($floor);
		return response()->json([
			'error' => false,
			'floor' => $floor
		], 200);
	}

	public function store(Request $request)
	{
		$name = $request->get('name');
		$building_id = $request->get('building_id');

		$floor = new Floor();
		$floor->name = $name;
		$floor->building_id = $building_id;
		$floor->save();

		if ($floor)
			return response()->json([
				'error' => false
			], 200);
		else
			return response()->json([
				'error' => true,
				'error_msg' => 'خطا بوجود آمده است'
			], 200);
	}

	public function update(Request $request, $floor)
	{
		$floor = Floor::find($floor);
		$floor->update($request->all());

		return response()->json([
			'error' => false

		], 200);
	}

	public function destroy($floor)
	{
		$floor = Floor::find($floor);
		$floor->delete();

		return response()->json([
			'error' => false
		], 200);
	}
}
