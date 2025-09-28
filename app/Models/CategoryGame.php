<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryGame extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}
