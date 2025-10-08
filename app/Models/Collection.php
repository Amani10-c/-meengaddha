<?php

namespace App\Models;

class Collection extends Base
{
    protected $fillable = [
        'name'
    ];
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
