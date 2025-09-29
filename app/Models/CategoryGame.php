<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryGame extends Model
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
