<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return view('welcome');
    }

    public function login_user(Request $request)
    {
        $this->validate($request, [
            'email'=> 'required|email',
            'password' => 'required'
        ]);

        $email=$request->email;
        $password=$request->password;
        $remember=false;
        if($request->has('remember_me')):
            $remember=true;
        endif;
        $credentials=['email' => $email, 'password' => $password];
        $login= auth()->attempt($credentials, $remember);
        if(! $login):
           flash()->overlay('Invalid Credentials', ' ');
           return back();
        endif;
        flash()->overlay('You are Now logged in...', ' ');
        return redirect('/schools');
    }

    public function register_user(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:7',
            'name' => 'required'
        ]);

        $email = $request->email;
        $password = $request->password;
        $name = $request->name;
        $phone = $request->phone;

        $user = User::create([
            'name'=> $name,
            'email'=> $email,
            'password'=> bcrypt($password),
            'phone' => $phone
        ]);
        if(!$user):
            flash()->overlay('Details Not Saved!', ' ');
            return back();
        endif;
        auth()->login($user);
        flash()->overlay('Registered Succesfully..', ' ');
        return back();
    }

}
