<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{

    public function index()
    {
        $types = Type::all();
        return response()->json([
            'error' => false,
            'types' => $types
        ], 200);
    }

    public function show($type)
    {
        $type = Type::find($type);
        return response()->json([
            'error' => false,
            'type' => $type
        ], 200);
    }

    public function store(Request $request)
    {

        $name = $request->get('name');
        $type = new Type();
        $type->name = $name;
        $type->save();

        if ($type)
            return response()->json([
                'error' => false
            ], 200);

        else
            return response()->json([
                'error' => true,
                'error_msg' => 'خطا بوجود آمده است'
            ], 200);

    }


    public function update(Request $request, $type)
    {
        $type = Type::find($type);
        $type->update($request->all());

        return response()->json([
            'error' => false
        ], 200);
    }

    public function destroy($type)
    {
        $type = Type::find($type);
        $type->delete();
        return response()->json([
            'error' => false
        ], 200);
    }
}
