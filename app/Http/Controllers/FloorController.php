<?php

namespace App\Http\Controllers;

use App\Floor;
use Illuminate\Http\Request;

class FloorController extends Controller
{
    public function index(){
        $floors = Floor::all();
        return response()->json([
            'error'=> false,
            'floors'=>$floors
        ],200);

    }


}
