<?php

namespace App\Models;

class TeamTime extends Base
{
    protected $fillable = [
        'team_time_1',
        'team_time_2',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function game()
    {
        return $this->hasOne(Game::class);
    }
}
