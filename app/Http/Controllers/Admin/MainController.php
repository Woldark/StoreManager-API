<?php
/**
 * Created by PhpStorm.
 * User: hatamiarash7
 * Date: 2018-07-15
 * Time: 17:21
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
	public function index()
	{
		if (!Auth::check()) {
			$message = "ابتدا وارد حساب کاربری شوید";
			return redirect('login')->with("message", $message);
		}
		return view('admin.home');
	}
}