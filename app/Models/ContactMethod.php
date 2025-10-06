<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactMethod extends Model
{
        use SoftDeletes;

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
