<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupPoint extends Model
{
        use SoftDeletes;

         protected $fillable = [

        'team_point_1',
        'team_point_2',
        'group_id',
    ];
   
    public function group(){
        return $this->belongsTo(Group::class);
    }
public function game(){
    return $this->hasOne(Game::class);
}
    
}
