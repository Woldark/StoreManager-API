<?php

namespace App\Http\Controllers;

use App\Good;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    public function index()
    {
        $goods = Good::all();
        return response()->json([
            'error' => false,
            'goods' => $goods
        ], 200);
    }

    public function show($good)
    {
        $good = Good::find($good);
        return response()->json([
            'error' => false,
            'good' => $good
        ], 200);
    }


    public function store(Request $request)
    {
        $name = $request->get('name');
        $good = new Good();
        $good->name = $name;
        $good->save();

        if ($good)
            return response()->json([
                'error' => false

            ], 200);

        else
            return response()->json([
                'error' => true,
                'error_msg' => 'خطا بوجود آمده است'
            ], 200);

    }

    public function update(Request $request, $good)
    {
        $good = Good::find($good);
        $good->update($request->all());
        return response()->json([
            'error' => false
        ], 200);
    }

    public function destroy($good)
    {
        $good = Good::find($good);
        $good->delete();

        return response()->json([
            'error' => false
        ], 200);
    }
}
