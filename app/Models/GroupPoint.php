<?php

namespace App\Models;

class GroupPoint extends Base
{
    protected $fillable = [
        'team_point_1',
        'team_point_2',
        'group_id',
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
