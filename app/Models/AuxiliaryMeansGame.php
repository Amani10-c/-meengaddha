<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuxiliaryMeansGame extends Model
{
    protected $fillable = [
        'game_id',
        'auxiliary_means_id'
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
    public function auxiliaryMean()
    {
        return $this->belongsTo(AuxiliaryMean::class);
    }

    public function teamAuxiliaryMeans()
    {
        return $this->hasMany(TeamAuxiliaryMean::class);
    }
}
