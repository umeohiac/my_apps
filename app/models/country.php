<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\school;

class country extends Model
{
    public $timestamps = false;

    public function school()
    {
        return $this->hasMany(school::class);
    }

    public static function fetch_countries()
    {
        return static::all()->sortBy('name');
    }
}
