<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 7/19/18
 * Time: 5:44 PM
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class AdminController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
}