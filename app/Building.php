<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
	protected $fillable = [
		'name'
	];

	protected $hidden = [
		'floors'
	];

	public function floors()
	{
		return $this->hasMany(Floor::class, 'building_id');
	}
}