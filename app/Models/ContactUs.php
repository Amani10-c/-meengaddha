<?php

namespace App\Models;

class ContactUs extends Base
{
    protected $fillable = [
        'name',
        'email',
        'message',
    ];
public $timestamps= true;

}
