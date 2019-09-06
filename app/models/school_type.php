<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\school;

class school_type extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];

    public function school()
    {
        return $this->hasMany(school::class);
    }

    public static function fetch_school_types()
    {
        return static::all()->sortBy('name');
    }
}
