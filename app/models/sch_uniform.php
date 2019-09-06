<?php

namespace App\models;
use App\models\school;

use Illuminate\Database\Eloquent\Model;

class sch_uniform extends Model
{

    protected $fillable = [
        'school_id', 'color', 'description', 'photo'
    ];
 
    public function school()
    {
        return $this->belongsTo(school::class);
    }
}
