<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    public function building()
    {
        return $this->belongsTo(Building::class, 'building_id');
    }

    public function rooms()
    {
        return $this->hasMany(Room::class, 'floor_id');
    }
}
