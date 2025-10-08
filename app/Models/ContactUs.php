<?php

namespace App\Models;

class ContactUs extends Base
{
    protected $fillable = [
        'user_id',
        'message',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
