<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\fee_type;
use App\models\fee_school;
use laracasts\flash;

class FeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $fees = fee_school::latest()->get();
        return view('pages.fees', compact('fees'));
    }

    public function assign_fees_to_school(Request $request) 
    {
        $this->validate($request, [
            'school_id' => 'required',
            'fee_type_id' => 'required',
            'grade' => 'required',
            'amount'=> 'required' 
        ]);

        $store = fee_school::create( $request->except('_token') );
        if (!$store) :
            flash()->overlay('Data did not not save!', ' ');
            return back(); 
        endif;

        flash()->overlay('Success', ' ');
        return back();
    }

    public function create_fee_types(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $store = fee_type::updateOrCreate($request->except('_token'));
        if (!$store) :
            flash()->overlay('Data did not not save!', ' ');
            return back();
        endif;

        flash()->overlay('Success', ' ');
        return back();
    }
}
