<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubscriptionFeature extends Model
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
