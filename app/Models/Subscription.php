<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'description',
        'price',
        'recommendation_id',
        'duration',
        'trial_days',
        'start_date',
        'end_date',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function recommendation()
    {
        return $this->belongsTo(Recommendation::class);
    }

    public function subscriptionAnswers()
    {
        return $this->hasMany(SubscriptionAnswer::class);
    }
}
