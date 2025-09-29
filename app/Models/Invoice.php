<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
        protected $fillable = [

        'subscription_id',
        'invoice_date',
        'total_amount',
        'status',
     
    ];
    
    public function subscription(){
        return $this->belongsTo(Subscription::class);
    }
}
