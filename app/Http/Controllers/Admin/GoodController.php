<?php

namespace App\Http\Controllers\Admin;

use App\Floor;
use App\Good;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoodController extends AdminController
{
	public function index()
	{
    $good=Good::orderby("created_at","desc")->get();
    return view('admin.goods',compact('good'));
	}

	public function create()
	{
     return view('admin.good_create');
	}

	public function save(Request $request)
	{
      $name=$request->get('name');
      $good=new Good();
      $good->name=$name;
      $good->save();

        toast('کالا ' . $name . ' اضافه شد', 'success', 'bottom-right');
        return redirect()->route('admin::goods.create');
	}

	public function edit($id)
	{
     $good=Good::find($id);
     return view('admin.goods_edite',compact('good'));
	}

	public function update(Request $request)
	{
     $id=$request->get('id');
     $name=$request->get('name');
     $good=Good::find($id);
     $good->name=$name;
	}

	public function delete($id)
	{

	}
}
