<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function goods()
    {
        return $this->hasMany(Good::class, 'type_id');
    }
}
