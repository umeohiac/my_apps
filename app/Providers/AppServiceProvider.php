<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
       
        view()->composer('forms.schools', function ($v) {
            $v->with('schools', \App\models\school::fetch_all_schools());
        });

        view()->composer('forms.ratings', function ($a) {
            $a->with('ratings', \App\models\rating::fetch_all_ratings());
        });

        view()->composer('forms.fee_types', function ($b) {
            $b->with('fee_types', \App\models\fee_type::get_fee_types());
        });

        view()->composer('forms.states', function ($c) {
            $c->with('states', \App\models\state::fetch_states());
        });

        view()->composer('forms.country', function ($d) {
            $d->with('countries', \App\models\country::fetch_countries());
        });

        view()->composer('forms.school_types', function ($e) {
            $e->with('school_types', \App\models\school_type::fetch_school_types() );
        });
        view()->composer('forms.curriculum', function ($f) {
            $f->with('curriculums', \App\models\curriculum::fetch_curriculums() );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
