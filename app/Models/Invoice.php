<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
        use SoftDeletes;

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
