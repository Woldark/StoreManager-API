<?php

namespace App\Http\Controllers\Admin;

use App\Floor;
use Illuminate\Http\Request;

class FloorController extends AdminController
{
	public function index()
	{
		$floors = Floor::orderby("created_at", "desc")->get();
		return view('admin.floors', compact('floors'));
	}

	public function create()
	{
		return view('admin.floor_create');
	}

	public function save(Request $request)
	{
		$name = $request->get('name');
		$floor = new Floor();
		$floor->name = $name;
		$floor->save();

		toast('طبقه ' . $name . ' اضافه شد', 'success', 'bottom-right');
		return redirect()->route('admin::floors.index');
	}

	public function edit($id)
	{
		$floor = Floor::find($id);
		return view('admin.floor_edite', compact('floor'));
	}

	public function update(Request $request)
	{
		$id = $request->get('id');
		$name = $request->get('name');

		$floor = Floor::find($id);
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
