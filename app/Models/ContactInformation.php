<?php

namespace App\Models;

class ContactInformation extends Base
{
      protected $fillable = [
        'address_company',
        'phone_number_company',
        'email_company'

    ];

    public function contactMethods()
    {
        return $this->hasMany(ContactMethod::class);
    }
}
