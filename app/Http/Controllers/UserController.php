<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
    use AuthenticatesUsers;

    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $credential = $request->only('email', 'password');

        if (auth()->attempt($credential)) {
            return redirect("/posts");
        } else {
            return redirect()->route("login")->with("error", "Email dan password salah");
        }
    }

    public function doLogout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.index')->with('success', 'Anda telah berhasil untuk Log Out');
    }

    public function createSample()
    {
        User::create([
            'name'=>'Administrator',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('1234')
        ]);

        echo "User berhasil ditambahkan";
    }
}
