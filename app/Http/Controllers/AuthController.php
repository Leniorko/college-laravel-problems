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
        if ($request->isMethod("POST")) {
            $user = new User();
            $user->fullname = $request->fullname;
            $user->login = $request->login;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->personal_data_confirmation = (bool) $request->personal_data_confirmation;

            $user->save();
            $user->refresh();

            return view("register", ["register_success" => true]);
        }

        return view("register");

    }

    public function authenticate(Request $request)
    {
        if ($request->isMethod("POST")) {

            $credentials = $request->validate([
                'login' => ["required"],
                'password' => 'required']);

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('profile');
            }

            return back()->withErrors([
                "email" => "The provided credentials do not match our records.",
            ]);
        }

        return view("login");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended("/");
    }

    public function all()
    {
        $all_users = User::all();

        return response()->json($all_users, 200, [], JSON_UNESCAPED_UNICODE);
    }
}
