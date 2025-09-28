<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupPoint extends Model
{
    public function group(){
        return $this->belongsTo(Group::class);
    }
public function game(){
    return $this->hasOne(Game::class);
}
    
}
