<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $user = new User();
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();
        $user->refresh();

    }

    public function login(Request $request)
    {

        $user = User::where('email', $request->email)->get();

        if (count($user) < 1) {
            return response()->json(['message' => 'This combination of email and password was not found'], 404);
        };

        $user = $user[0];
        $verified = Hash::check($request->password, $user->password);

        if ($verified !== true) {
            return response()->json(['message' => 'This combination of email and password was not found'], 401);
        };

        if (Auth::attempt(['email' => $user->email, 'password' => $request->password])) {
            return response()->json(['Message' => 'Successful'], 200);
        } else {
            return response()->json(['Message' => 'Something went wrong'], 401);
        }
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ["required", 'email'],
            'password' => 'required']);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            "email" => "The provided credentials do not match our records.",
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return response()->json(['Message' => "Successful"], 200);
    }

    public function all()
    {
        $all_users = User::all();

        return response()->json($all_users, 200, [], JSON_UNESCAPED_UNICODE);
    }
}
