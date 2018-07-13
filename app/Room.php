<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
	protected $hidden = ['goods'];

	public function floor()
	{
		return $this->belongsTo(Floor::class, 'floor_id');
	}

	public function responsibles()
	{
		return $this->hasMany(Responsible::class, 'room_id');
	}

	public function goods()
	{
		return $this->hasMany(Good::class, 'room_id');
	}
}
