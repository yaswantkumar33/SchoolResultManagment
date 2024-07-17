<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user; // Note: User should typically be capitalized
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home');
    }

    public function dashboard()
    {
        return view("dashboard");
    }

    public function login()
    {
        $register = false;
        return view('register', ['register' => $register]);
    }

    public function register()
    {
        $register = true;
        return view('register', ['register' => $register]);
    }

    public function storeStudent(Request $request)
    {
        // dd($request->except('_token'));
        $data = $request->except('_token');
        // user::

    }

    public function registeruser(Request $request)
    {
        // return response()->json(['username' => $request->username, 'email' => $request->email, 'password' => $request->password, 'confirmpassword' => $request->confirmpassword, 'dob' => $request->dob]);
        $data['username'] = $request->username;
        $data['useremail'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['dob'] = $request->dob;
        $date['role'] = $request->role;
        $user = User::create($data);
        return redirect()->route('login');
    }

    public function userlogin(Request $request)
    {
        $request->validate([
            'useremail' => 'required|email',
            'password' => 'required',
            'role' => 'required',
        ]);

        $credentials = $request->only('useremail', 'password', 'role');

        if (Auth::attempt($credentials)) {
            if ($request->role == "student") {
                return redirect()->intended(route('Home'));
            } else {
                return redirect()->intended(route("teacher.dashboard"));
            }
        }

        return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.');
    }


    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('login');
    }
    public function teacher()
    {
        return view('teacherDashboard');
    }
}