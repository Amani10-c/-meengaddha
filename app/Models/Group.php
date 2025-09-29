<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = [

        'name_game',
        'team_1',
        'team_2',
        'Number_of_questions'
    ];

    public function teamTime()
    {
        return $this->hasOne(TeamTime::class);
    }
    public function groupPoint()
    {
        return $this->hasOne(GroupPoint::class);
    }

    public function games()
    {
        return $this->hasMany(Game::class);
    }
    public function teamAuxiliaryMeans()
    {
        return $this->hasMany(TeamAuxiliaryMean::class);
    }
}
