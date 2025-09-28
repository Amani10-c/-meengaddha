<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamAuxiliaryMean extends Model
{
    public function group(){
        return $this->belongsTo(Group::class);
    }
    public function auxiliaryMeansGame(){
        return $this->belongsTo(AuxiliaryMeansGame::class);
    }
}
