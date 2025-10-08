<?php

namespace App\Models;

class TeamAuxiliaryMean extends Base
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
