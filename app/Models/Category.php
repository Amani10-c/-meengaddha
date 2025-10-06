<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'category_name',
        'photo',
        'collection_id',
        'need_subscription',
        'created_at'
    ];

    public function collection()
    {
        return $this->belongsTo(Collection::class);
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    public function categoryGames()
    {
        return $this->hasMany(CategoryGame::class);
    }
}
