<?php

namespace App\Models;

class CategoryGame extends Base
{

    protected $fillable = [
        'game_id',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
