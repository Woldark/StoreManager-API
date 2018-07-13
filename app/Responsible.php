<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsible extends Model
{
	protected $hidden = ['room'];

	public function room()
	{
		return $this->belongsTo(Room::class, 'room_id');
	}
}
