<?php

namespace App\Http\Controllers;

use App\Responsible;
use App\Room;
use Illuminate\Http\Request;

class ResponsibleController extends Controller
{

    public function index()
    {
        $responsibles = Responsible::all();
        return response()->json([
            'error' => false,
            'responsibles' => $responsibles
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
        $room_id = $request->get('room_id');
        $code_meli = $request->get('code_meli');
        $post = $request->get('post');
        $shenasnameh = $request->get('shenasnameh');
        $personeli = $request->get('personeli');


        $responsible = new Responsible();
        $responsible->name = $name;
        $responsible->room_id = $room_id;
        $responsible->code_meli = $code_meli;
        $responsible->post = $post;
        $responsible->shenasnameh = $shenasnameh;
        $responsible->personeli = $personeli;

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
