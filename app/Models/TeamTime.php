<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TeamTime extends Model
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
