<?php

namespace App\Models;

class ContactMethod extends Base
{
    protected $fillable = [
        'method_name',
        'method_value',
        'contact_information_id'

    ];

    public function contactInformation()
    {
        return $this->belongsTo(ContactInformation::class);
    }
}
