<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginForm(){
        return view('auth.authLogin');
    }

    public function login(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if(Auth::attempt($request->only('email','password'))){
            if(Auth::user()->role==='admin'){
                 return to_route('admin');
            }
            return to_route('products.index');
        }
        
        return back()->withErrors(['email' => 'Invalid credentials.']);
        
    }

    public function signupForm(){
        return view('auth.authSignup');
    }

    public function signup(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:12',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Create the user
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        // Log in the user after successful registration
        Auth::login($user);

        // Redirect to home or wherever you want
        return redirect()->route('products.index');
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
