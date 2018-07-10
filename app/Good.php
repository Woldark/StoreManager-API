<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function type()
    {
        return $this->belongsTo(Type::class, 'type_id');
    }
}
