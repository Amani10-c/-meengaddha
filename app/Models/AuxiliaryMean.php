<?php

namespace App\Models;

class AuxiliaryMean extends Base
{
    protected $fillable = [
        'name',
        'icon',
    ];

    public function auxiliaryMeansGames()
    {
        return $this->hasMany(AuxiliaryMeansGame::class);
    }
}
