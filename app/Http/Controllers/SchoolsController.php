<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\school;
use App\models\sch_uniform;
use App\models\curriculum;
use App\models\school_type;

class SchoolsController extends Controller
{

    public function __construct()
    { 
        $this->middleware('auth');
    }

    public function index()
    {
        $schools=school::fetch_all_schools();
        return view('pages.schools', compact('schools'));
    }

    public function register_school(Request $request)
    {
        $this->validate($request, [
            'name' => 'required', 
            'email' => 'required|email',        
            'govt_approved' => 'required', 
            'local_government' => 'required',
             'address' => 'required',
            'town' => 'required', 
            'city' => 'required',            
            'country_id' => 'required',
            'curriculum_id' => 'required',
            'school_type_id' => 'required',
        ]);

        $logo='';
        if($request->has('logo')):
            $this->validate($request,['logo'=>'image|max:1500']);
            $file = $request->File('logo');
            $extension = $file->getClientOriginalExtension();
            $logo = time() . '_' . str_random(20).'.'.$extension;
            $path = 'uploads/school_logo';
            $file->move($path, $logo);
        endif;
           
            $store = school::create([
                'name' => $request->name,
                'email' => $request->email,
                'website' => $request->website,
                'students_population' => $request->students_population,
                'staff_population' => $request->staff_population,
                'govt_approved' => $request->govt_approved,
                'phone' => $request->phone,
                'motto' => $request->motto,
                'address' => $request->address,
                'town' => $request->town,
                'city' => $request->city,
                'local_government' => $request->local_government,
                'state_id' => $request->state_id,
                'curriculum_id' => $request->curriculum_id,
                'school_type_id' => $request->school_type_id,
                'postal_code' => $request->postal_code,
                'country_id' => $request->country_id,
                'logo' => $logo,
            ]);
        
        if (!$store) :
            flash()->overlay('Data did not not save!', ' ');
            return back();
        endif;

        flash()->overlay('Success', ' ');
        return back();
    }

    public function assign_uniform_to_school(Request $request) 
    {
        $this->validate($request, [
            'school_id' => 'required',
            'color'=>'required',
        ]);

        $photo = '';
        if ($request->has('photo')) :
            $this->validate($request, ['photo' => 'image|max:1500']);
            $file = $request->File('photo');
            $extension = $file->getClientOriginalExtension();
            $photo = time().'_'.str_random(20) . '.' . $extension;
            $path = 'uploads/school_uniforms';
            $file->move($path, $photo);
        endif;

        $store = sch_uniform::updateOrCreate([
            'school_id'=> $request->school_id,
            'color' => $request->color,
            'description'=> $request->description,
            'photo' => $photo,
        ]);
        if (!$store) :
            flash()->overlay('Data did not save!', ' ');
            return back();
        endif;

        flash()->overlay('Success', ' ');
        return back();
    }

    public function view_school_uniforms()
    {
        $sch_uniforms= sch_uniform::latest()->get();;
        return view('pages.school_uniform', compact('sch_uniforms'));
    }

    public function view_school_info(school $id)
    {
        return view('pages.school_info', compact('id'));
    }

    public function store_new_curriculum(Request $request)
    {
        $this->validate($request, ['name' => 'required']);
        $save=curriculum::updateOrCreate($request->except('_token'));
        if(! $save):
            flash()->overlay('An error ocurred !', ' ');
            return back();
        else:
            flash()->overlay('Success !', ' ');
            return back();
        endif;      
    }

    public function store_new_school_type(Request $request)
    {
        $this->validate($request, ['name' => 'required']);
        $save=school_type::updateOrCreate($request->except('_token'));
        if(! $save):
            flash()->overlay('An error ocurred !', ' ');
            return back();
        else:
            flash()->overlay('Success !', ' ');
            return back();
        endif;      
    }
}
