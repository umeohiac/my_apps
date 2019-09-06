<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\school;

class state extends Model
{
    public $timestamps = false;

    public static function fetch_states()
    {
        return static::all()->sortBy('name');
    }

    public function school()
    {
        return $this->hasMany(school::class);
    }
}
