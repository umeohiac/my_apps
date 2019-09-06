<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\review;
use App\models\rating;

class ReviewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $reviews = review::latest()->get();
        return view('pages.reviews', compact('reviews'));
    }

    public function user_review(Request $request)
    {
        $this->validate($request, [
            'school_id' => 'required',
            'user_id' => 'required',
            'rating_id' => 'required',
        ]);

        $store = review::updateOrCreate($request->except('_token'));
        if (!$store) :
            flash()->overlay('Data did not not save!', ' ');
            return back();
        endif;

        flash()->overlay('Success', ' ');
        return back();
    }

    public function create_new_rating_name(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $store = rating::updateOrCreate($request->except('_token'));
        if (!$store) :
            flash()->overlay('Data did not not save!', ' ');
            return back();
        endif;

        flash()->overlay('Success', ' ');
        return back();
    }

}
