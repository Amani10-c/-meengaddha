<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubscriptionFeature extends Model
{
        use SoftDeletes;

    protected $fillable = [

        'subscription_id',
        'feature_name',
    ];

    public function subscription()
    {
        return $this->belongsTo(Subscription::class);
    }
}
