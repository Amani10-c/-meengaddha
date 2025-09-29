<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamAuxiliaryMean extends Model
{
    protected $fillable = [

        'group_id',
        'auxiliary_means_games_id',
        'is_used',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
    public function auxiliaryMeansGame()
    {
        return $this->belongsTo(AuxiliaryMeansGame::class);
    }
}
