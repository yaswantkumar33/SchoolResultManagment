<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}