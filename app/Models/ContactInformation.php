<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactInformation extends Model
{
        use SoftDeletes;

      protected $fillable = [

        'address_company',
        'phone_number_company',
        'email_company'

    ];

    public function contactMethods(){
        return $this->hasMany(ContactMethod::class);
    }
}
