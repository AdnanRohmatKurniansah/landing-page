<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AuthController extends Controller
{
    public function index() {
        return view('auth.login', [
            'title' => 'Login Page'
        ]);
    }

    public function auth(Request $request) {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            Alert::toast('Login Successfully!', 'success');
            return redirect()->intended('/dashboard');
        }
        return back()->with('toast_error', 'Login Failed!');
    }
    public function logout() {
        Auth::logout();

        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect('/');
    }
    public function show() 
    {
        return view('auth.updatePass');
    }
    public function updatePassword(Request $request) 
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if(!Hash::check($request->old_password, auth()->user()->password)){
            Alert::toast('Old Password Doesnt match!', 'error');
            return back();
        }
        else {
            User::whereId(auth()->user()->id)->update([
                'password' => Hash::make($request->new_password)
            ]);
    
            Alert::toast('Password Changed Successfuly!', 'success');
            return redirect('/dashboard');
        }
    }
    public function add() {
        return view('auth.addNewAdmin');
    }
    public function store(Request $request) {
        $validatedData = $request->validate([
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);   

        Alert::toast('New Admin Added Successfuly!', 'success');
        return redirect('/dashboard');
    }

}
