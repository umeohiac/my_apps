<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\school;

class curriculum extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];

    public function school()
    {
        return $this->hasMany(school::class);
    }

    public static function fetch_curriculums()
    {
        return static::all()->sortBy('name');
    }
}
