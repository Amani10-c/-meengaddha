<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamTime extends Model
{
    use SoftDeletes;
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
