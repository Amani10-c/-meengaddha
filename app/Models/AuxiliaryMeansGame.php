<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuxiliaryMeansGame extends Model
{
    public function game(){
        return $this->belongsTo(Game::class);
    }
    public function auxiliaryMean(){
        return $this->belongsTo(AuxiliaryMean::class);
    }

    public function teamAuxiliaryMeans(){
        return $this->hasMany(TeamAuxiliaryMean::class);
    }
}
