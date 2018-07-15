<?php
/**
 * Created by PhpStorm.
 * User: hatamiarash7
 * Date: 2018-07-15
 * Time: 17:24
 */

namespace App\Http\Composers;

use Illuminate\Contracts\View\View;

class AdminComposer
{
	protected $user;

	public function __construct()
	{
		if (auth()->check())
			$this->user = auth()->user();
	}

	public function compose(View $view)
	{
		$view->with('authUser', $this->user);
	}
}