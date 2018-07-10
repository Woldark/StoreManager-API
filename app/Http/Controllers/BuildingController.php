<?php

namespace App\Http\Controllers;

use App\Building;
use Illuminate\Http\Request;

class BuildingController extends Controller
{
    public function index()
    {
        $buildings = Building::all();
        return response()->json([
            'error' => false,
            'buildings' => $buildings
        ], 200);
    }

    public function show($building)
    {
        $building = Building::find($building);
        return response()->json([
            'error' => false,
            'building' => $building
        ], 200);
    }

    public function store(Request $request)
    {
        $name = $request->get('name');

        $building = new Building();
        $building->name = $name;
        $building->save();

        if ($building)
            return response()->json([
                'error' => false
            ], 200);
        else
            return response()->json([
                'error' => true,
                'error_msg' => 'مشکلی به وجود آمده است'
            ], 200);
    }

    public function update(Request $request, $building)
    {
        $building = Building::find($building);
        $building->update($request->all());

        return response()->json([
            'error' => false
        ], 200);
    }

    public function destroy($building)
    {
        $building = Building::find($building);
        $building->delete();

        return response()->json([
            'error' => false
        ], 200);
    }
}
