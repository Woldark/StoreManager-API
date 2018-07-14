<?php

namespace App\Http\Controllers;

use App\Responsible;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ResponsibleController extends Controller
{

    private $responsible_path;

    public function __construct()
    {
        $this-> responsible_path = public_path('/images/responsible');
        $this->makeDirectories();
    }

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
		$room = $responsible->room;
		$goods = $room->goods;
		return response()->json([
			'error' => false,
			'responsible' => $responsible,
			'room' => $room,
			'products' => $goods
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

		if (Input::hasFile('image')){

		    $image = $request->file('image');
		    $input['imagename'] = 'R_'. $responsible->id. '.' .$image->getClientOriginalExtension();
		    $image ->move($this ->responsible_path,$input['imagename']);
		    $responsible->picture =$input['imagename'];
		    $responsible->save();

        }

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

	public function update(Request $request, $responsible)
	{
		$responsible = Responsible::find($responsible);
		$responsible->update($request->all());
		return response()->json([
			'error' => false
		], 200);
	}

	public function destroy($responsible)
	{
		$responsible = Responsible::find($responsible);
		$responsible->delete();

		return response()->json([
			'error' => false
		], 200);
	}

	private function makeDirectories (){

        if(!is_dir($this->responsible_path))
            mkdir($this->responsible_path,0777,true);
        chmod($this->responsible_path,0777);
    }
}