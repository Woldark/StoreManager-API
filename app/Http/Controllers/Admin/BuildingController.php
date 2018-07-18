<?php

namespace App\Http\Controllers\Admin;

use App\Building;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
	public function index()
	{
		$buildings = Building::orderBy("created_at", "desc")->get();
		return view('admin.buildings', compact('buildings'));
	}

	public function create()
	{
		return view('admin.building_create');
	}

	public function save(Request $request)
	{
		$name = $request->get('name');
		$building = new Building();
		$building->name = $name;
		$building->save();

		toast('ساختمان ' . $name . ' اضافه شد', 'success', 'bottom-right');
		return redirect()->route('admin::buildings.index');
	}

	public function edit($id)
	{

	}

	public function update(Request $request)
	{

	}

	public function delete($id)
	{
		try {
			$building = Building::find($id);
			$building->delete();

			toast('ساختمان ' . $building->name . ' حذف شد', 'success', 'bottom-right');
			return redirect()->route('admin::buildings.index');
		} catch (\Exception $exception) {
			toast('مشکلی پیش آمده است', 'error', 'bottom-right');
			return redirect()->route('admin::buildings.index');
		}
	}
}
