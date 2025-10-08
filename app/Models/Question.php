<?php

namespace App\Models;

class Question extends Base
{
    protected $fillable = [
        'category_id',
        'type_question',
        'answer',
        'point',
        'difficulty_level',
        'question_text',
        'image_path'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
