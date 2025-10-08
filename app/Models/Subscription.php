<?php

namespace App\Models;

class Subscription extends Base
{
    protected $fillable = [
        'stat_date',
        'end_date',
        'status',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function subscriptionFeatures()
    {
        return $this->hasMany(SubscriptionFeature::class);
    }
    public function invoice()
    {
        return $this->hasMany(Invoice::class);
    }
}
