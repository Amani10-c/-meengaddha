<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
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
