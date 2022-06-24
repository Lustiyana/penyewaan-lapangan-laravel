<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(){
        $data['title'] = 'register';
        return view('user/register', $data);
    }

    public function register_action(Request $request){
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
            'password_confirmation'=>'required|same:password',
        ]);
        $user = new User([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => 0
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Registrasi Berhasil. Silahkan masuk');
    }
    public function login(){
        $data['title'] = 'Login';
        return view('user/login', $data);
    }
    public function login_action(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if(auth()->attempt(array('email' => $request['email'], 'password' => $request['password']))){
            $request->session()->regenerate();
            return redirect()->route('home');
        }
        return back()->withErrors(['password'=>'Password atau Email salah!']);
    }

    public function register_admin(){
        $data['title'] = 'register';
        return view('user/register_admin', $data);
    }

    public function register_admin_action(Request $request){
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|unique:users',
            'password'=>'required',
            'password_confirmation'=>'required|same:password',
        ]);
        $user = new User([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => 1
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Registrasi Berhasil. Silahkan masuk');
    }
    public function login_admin(){
        $data['title'] = 'Login';
        return view('user/login_admin', $data);
    }
    public function login_admin_action(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        if(auth()->attempt(array('email' => $request['email'], 'password' => $request['password']))){
            $request->session()->regenerate();
            return redirect()->route('homeAdmin');
        }
        return back()->withErrors(['password'=>'Password atau Email salah!']);
    }
}
