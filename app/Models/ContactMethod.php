<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMethod extends Model
{
    public function contactInformation()
    {
        return $this->belongsTo(ContactInformation::class);
    }
}
