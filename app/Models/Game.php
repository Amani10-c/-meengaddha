<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
        use SoftDeletes;

    protected $fillable = [

        'user_id',
        'group_id',
        'group_point_id',
        'team_time_id',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function teamTime()
    {
        return $this->belongsTo(TeamTime::class);
    }

    public function groupPoint()
    {
        return $this->belongsTo(GroupPoint::class);
    }


    public function auxiliaryMeansGames()
    {
        return $this->hasMany(AuxiliaryMeansGame::class);
    }

    public function categoryGames()
    {
        return $this->hasMany(CategoryGame::class);
    }
}
