<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function login(){
        return view('authentication.login');
    }

    public function authenticate(Request $request){
        $formrequest = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt($formrequest)){
            $request->session()->regenerate();
           /* return redirect('/')->with('message','Logged in successful')*/;
           return 'ok';
        }
/*        return back()->with('message','invalid userrname and password');*/
        return 'invalid';
    }

    public function signup(){
        return view('authentication.signup');
    }

    public function store(Request $request){
        $formrequest = $request->validate([
            'name' => 'required',
            'email' => ['required',Rule::unique('users','email')],
            'phone' => 'required',
            'address' => 'required',
            'password' => 'required'

        ]);
        if ($request->hasFile('image')){
            $formrequest['image'] = $request->file('image')->store('userprofile', 'public');
        }
        $user = User::create($formrequest);
        Auth::login($user);

        return redirect('/')->with('message','Registration successful');

    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
