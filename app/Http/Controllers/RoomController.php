<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{

    public function index()
    {
        $rooms = Room::all();
        return response()->json([
            'error' => false,
            'rooms' => $rooms
        ], 200);
    }

    public function show($room)
    {
        $room = Room::find($room);
        return response()->json([
            'error' => false,
            'room' => $room
        ], 200);
    }

    public function store(Request $request)
    {
        $name = $request->get('name');
        $floor_id = $request->get('floor_id');
        $barcode = $request->get('barcode');

        $room = new Room();
        $room->name = $name;
        $room->floor_id = $floor_id;
        $room->barcode = $barcode;
        $room->save();

        if ($room)
            return response()->json([
                'error' => false
            ], 200);
        else
            return response()->json([
                'error' => true,
                'error_msg' => 'مشکلی به وجود آمده است'
            ], 200);
    }

    public function update(Request $request, $room)
    {

        $room = Room::find($room);
        $room->update($request->all());
        return response()->json([
            'error' => false
        ], 200);
    }

    public function destroy($room)
    {

        $room = Room::find($room);
        $room->delete();
        return response()->json([
            'error' => false
        ], 200);

    }
}
