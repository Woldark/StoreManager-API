<?php

namespace App\Http\Controllers;

use App\Responsible;
use App\Room;
use Illuminate\Http\Request;

class ResponsibleController extends Controller
{

    public function index()
    {
        $responsibles = Room::all();
        return response()->json([
            'error' => false,
            'rooms' => $responsibles
        ], 200);
    }


    public function show($responsible)
    {

        $responsible = Responsible::find($responsible);
        return response()->json([
            'error' => false,
            'responsible' => $responsible
        ], 200);
    }

    public function store(Request $request)
    {
        $name = $request->get('name');
        $responsible = new Responsible();
        $responsible->name = $name;
        $responsible->save();

        if ($responsible)
            return response()->json([
                'error' => false
            ], 200);


        else
            return response()->json([
                'error' => true,
                'error_msg' => 'خطا بوجود آمده است'
            ], 200);

    }



    public  function  update(Request $request, $responsible){

        $responsible = Responsible::find($responsible);
        $responsible->update($request->all());
        return response()->json([
            'error'=>false
        ],200);

    }

    public function destroy($responsible){
        $responsible = Responsible::find($responsible);
        $responsible->delete();

        return response()->json([
            'error'=>false
        ],200);
    }

}
