<?php

namespace App\Models;


class Invoice extends Base
{
    protected $fillable = [
        'subscription_id',
        'invoice_date',
        'total_amount',
        'status',

    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
