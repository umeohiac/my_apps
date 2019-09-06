<?php

namespace App\models;
use App\models\school;
use App\models\fee_type;

use Illuminate\Database\Eloquent\Model;

class fee_school extends Model
{
    protected $fillable = [
        'school_id', 'fee_type_id', 'grade', 'amount'
    ];

    public function school()
    {
        return $this->belongsTo(school::class);
    }

    public function fee_type()
    {
        return $this->belongsTo(fee_type::class);
    }

}
