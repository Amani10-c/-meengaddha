<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function collection(){
        return $this->belongsTo(Collection::class);
    }
    public function questions(){
        return $this->hasMany(Question::class);
    }
    public function categoryGames(){
        return $this->hasMany(CategoryGame::class);
    }
}
