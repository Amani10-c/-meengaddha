<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
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
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
