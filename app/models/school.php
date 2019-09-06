<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use App\models\sch_uniform;
use App\models\fee_school;
use App\models\award;
use App\models\review;
use App\models\country;
use App\models\state;
use App\models\curriculum;
use App\models\school_type;

class school extends Model
{
    protected $fillable = [
        'name', 'email', 'students_population', 'staff_population', 'govt_approved',
        'website', 'logo', 'phone', 'motto', 'address', 'town', 'city', 'state_id', 'local_government',
        'postal_code', 'country_id', 'school_type_id', 'curriculum_id'
    ];

    public static function fetch_all_schools()
    {
        return static::latest()->get();
    }

    public function sch_uniform()
    {
        return $this->hasMany(sch_uniform::class);
    }

    public function fee_school()
    {
        return $this->hasMany(fee_school::class);
    }

    public function award()
    {
        return $this->hasMany(award::class);
    }
    
    public function review()
    {
        return $this->hasMany(review::class);
    }

    public function country()
    {
        return $this->belongsTo(country::class);
    }

    public function curriculum()
    {
        return $this->belongsTo(curriculum::class);
    }

    public function state()
    {
        return $this->belongsTo(state::class);
    }
    public function school_type()
    {
        return $this->belongsTo(school_type::class);
    }
}
