<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
      protected $fillable = [

        'address_company',
        'phone_number_company',
        'email_company'

    ];

    public function contactMethods(){
        return $this->hasMany(ContactMethod::class);
    }
}
