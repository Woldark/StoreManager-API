<?php

namespace App\Http\Controllers\Admin;

use App\Building;
use App\Floor;
use Illuminate\Http\Request;

class FloorController extends AdminController
{
	public function index()
	{
		$floors = Floor::orderby("building_id", "asc")->get();
		return view('admin.floors', compact('floors'));
	}

	public function create()
	{
		$buildings = Building::orderBy("name", "asc")->get();
		return view('admin.floor_create', compact('buildings'));
	}

	public function save(Request $request)
	{
		$name = $request->get('name');
		$building = $request->get('building');

		$floor = new Floor();
		$floor->building_id = $building;
		$floor->name = $name;
		$floor->save();

		toast('طبقه ' . $name . ' اضافه شد', 'success', 'bottom-right');
		return redirect()->route('admin::floors.index');
	}

	public function edit($id)
	{
		$floor = Floor::find($id);
		$buildings = Building::orderBy("name", "asc")->get();
		return view('admin.floor_edite', compact('floor', 'buildings'));
	}

	public function update(Request $request)
	{
		$id = $request->get('id');
		$name = $request->get('name');
		$building = $request->get('building');

		$floor = Floor::find($id);
		$floor->building_id = $building;
		$floor->name = $name;
		$floor->save();

		toast('طبقه ' . $name . ' به روز شد', 'success', 'bottom-right');
		return redirect()->route('admin::floors.index');
	}

	public function delete($id)
	{
		try {
			$floor = Floor::find($id);
			$floor->delete();

			toast('طبقه ' . $floor->name . ' حذف شد', 'success', 'bottom-right');
			return redirect()->route('admin::floors.index');
		} catch (\Exception $exception) {
			toast('مشکلی پیش آمده است', 'error', 'bottom-right');
			return redirect()->route('admin::floors.index');
		}
	}
}
