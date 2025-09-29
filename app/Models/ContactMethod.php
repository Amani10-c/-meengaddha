<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMethod extends Model
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
