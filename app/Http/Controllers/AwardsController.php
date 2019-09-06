<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\award;
use laracasts\flash;

class AwardsController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
    }

    public function index()
    {
        $awards= award::latest()->get();
        return view('pages.awards', compact('awards'));
    }

    public function assign_awards_to_school(Request $request)
    {
        $this->validate($request,[
            'school_id' => 'required',
            'awarded_by' => 'required',
            'total' => 'required'
        ]);

        $store=award::updateOrCreate($request->except('_token'));
             if(! $store):
                flash()->overlay('Data did not not save!', ' ');
                return back();
             endif;
             
             flash()->overlay('Success', ' ');
             return back();
    }
}
