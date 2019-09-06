<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\review;

class rating extends Model
{
    protected $fillable = [
        'name',
    ];

    public static function fetch_all_ratings()
    {
        return static::all();
    }

    public function review()
    {
        return $this->hasMany(review::class);
    }
}
