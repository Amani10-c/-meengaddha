<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuxiliaryMean extends Model
{
    public function auxiliaryMeansGames()
    {
        return $this->hasMany(AuxiliaryMeansGame::class);
    }
}
