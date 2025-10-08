<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
        use SoftDeletes;

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
