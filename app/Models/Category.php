<?php

namespace App\Models;


class Category extends Base
{
    protected $fillable = [
        'category_name',
        'photo',
        'collection_id',
        'need_subscription'
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
