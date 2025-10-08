<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamAuxiliaryMean extends Model
{
        use SoftDeletes;

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
