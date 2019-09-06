<?php

namespace App\models;
use App\models\school;

use Illuminate\Database\Eloquent\Model;

class award extends Model
{
    protected $fillable = [
        'school_id', 'awarded_by', 'description', 'total'
    ];

    public function school()
    {
        return $this->belongsTo(school::class);
    } 

}
