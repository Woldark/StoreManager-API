<?php

namespace App\Http\Controllers\Admin;

use App\Floor;
use App\Http\Controllers\Controller;
use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
	public function index()
	{
		$rooms = Room::join('floors', 'floors.id', '=', 'rooms.floor_id')
			->orderBy('floors.building_id', 'asc')
			->get(['rooms.*']);

		return view('admin.rooms', compact('rooms'));
	}

	public function create()
	{
		$floors = Floor::orderBy("building_id", "asc")->get();
		return view('admin.room_create', compact('floors'));
	}

	public function save(Request $request)
	{
		$name = $request->get('name');
		$floor = $request->get('floor');
		$barcode = $request->get('barcode');

		$room = new Room();
		$room->floor_id = $floor;
		$room->name = $name;
		$room->barcode = $barcode;
		$room->save();

		toast('اتاق ' . $name . ' اضافه شد', 'success', 'bottom-right');
		return redirect()->route('admin::rooms.index');
	}

	public function edit($id)
	{
		$room = Room::find($id);
		$floors = Floor::orderBy("building_id", "asc")->get();
		return view('admin.room_edit', compact('room', 'floors'));
	}

	public function update(Request $request)
	{
		$id = $request->get('id');
		$name = $request->get('name');
		$floor = $request->get('floor');
		$barcode = $request->get('barcode');

		$room = Room::find($id);
		$room->floor_id = $floor;
		$room->name = $name;
		$room->barcode = $barcode;
		$room->save();

		toast('طبقه ' . $name . ' به روز شد', 'success', 'bottom-right');
		return redirect()->route('admin::rooms.index');
	}

	public function delete($id)
	{
		try {
			$room = Room::find($id);
			$room->delete();

			toast('اتاق ' . $room->name . ' حذف شد', 'success', 'bottom-right');
			return redirect()->route('admin::rooms.index');
		} catch (\Exception $exception) {
			toast('مشکلی پیش آمده است', 'error', 'bottom-right');
			return redirect()->route('admin::rooms.index');
		}
	}
}
