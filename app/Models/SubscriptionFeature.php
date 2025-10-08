<?php

namespace App\Models;

class SubscriptionFeature extends Base
{
    protected $fillable = [
        'subscription_id',
        'feature_name',
    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
