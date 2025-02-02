<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use App\Http\Controllers\ProductController;

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
        return to_route('products.index');
    }

    public function logout(Request $request){
        $user = Auth::user();
        $user->update([
            'google_token' => null,
            'google_refresh_token' => null,
            'token_expires_at' => null,
        ]); 

        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->with(['prompt' => 'select_account'])->redirect(); 
    }

    public function handleGoogleCallback(){
            try {
            $googleUser = Socialite::driver('google')->stateless()->user();
            
            // Find or create the user
            $user = User::updateOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'google_id' => $googleUser->getId(),
                    'google_token' => $googleUser->token,
                    'google_refresh_token' => $googleUser->refreshToken,
                    'password' => Hash::make(Str::random(24)), // Create a random password (optional)
                ]
            );

            // Log the user in
            Auth::login($user, false);
            session()->regenerate();

            return redirect()->route('products.index'); // Redirect to the desired page after login
        } catch (\Exception $e) {
            \Log::error('Google Login Error: ' . $e->getMessage());
            return redirect()->route('login')->with('error', 'Google login failed. Please try again.');
        }
    }
}
