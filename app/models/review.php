<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\models\school;
use App\models\rating;

class review extends Model
{
    protected $fillable = [
        'school_id', 'user_id', 'rating_id', 'comment'
    ];

    public function school()
    {
        return $this->belongsTo(school::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function rating()
    {
        return $this->belongsTo(rating::class);
    }

}
