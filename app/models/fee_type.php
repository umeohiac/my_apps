<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\fee_school;

class fee_type extends Model
{

    protected $fillable = [
        'name',
    ];

    public static function get_fee_types()
    {
        return static::all()->sortBy('name');
    }

    public function fee_school()
    {
        return $this->hasMany(fee_school::class);
    }

}
