<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    public function contactMethods(){
        return $this->hasMany(ContactMethod::class);
    }
}
