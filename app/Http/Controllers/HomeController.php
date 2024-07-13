<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;

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
    public function axiostest(Request $request)
    {


        return response()->json(['message' => $request->username]);
    }
    public function userlogin(Request $request)
    {
        $request->validate(['email' => 'required', 'password' => 'required',]);

        $creditianls = $request->only('email','password');






    }
}