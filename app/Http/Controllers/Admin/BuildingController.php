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

	}
}
