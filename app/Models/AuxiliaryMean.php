<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuxiliaryMean extends Model
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
