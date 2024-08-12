<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user; // Note: User should typically be capitalized
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Result;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home');
    }

    public function dashboard()
    {
        if(auth()->user()){
            $records = Result::where('user_id', auth()->user()->id)->get();
        // dd($records[0]->results);
        $decodedcode = json_decode($records[0]->results, true);
        // dd($decodedcode);
        // dd($record);

        // Check if the record exists
        // if ($record) {
        //     // The 'results' field is automatically cast to an array
        //     $decodedResults = $record->results;

        //     // Pass the decoded results to a view or handle it as needed
        //     return view('results.show', ['results' => $decodedResults]);
        // } else {
        //     return redirect()->route("login");
        // }
        return view('dashboard', compact('decodedcode'));
        }else{
            return redirect('/login');
        }
    }

    public function login()
    {
        return view('login');
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
        // Uncomment for debugging
        // return response()->json(['username' => $request->username, 'email' => $request->email, 'password' => $request->password, 'confirmpassword' => $request->confirmpassword, 'dob' => $request->dob]);

        $data['username'] = $request->username;
        $data['useremail'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['dob'] = $request->dob;
        $data['role'] = $request->role; // Ensure 'role' is correctly defined in your database schema
        User::create($data);

        return response()->json(['success' => true, 'message' => 'Registration successful']);
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

            if ($request->role) {
                if ($request->role == "student") {
                    return redirect()->intended(route('Home'));
                } else if ($request->role == "teacher") {
                    return redirect()->intended(route("teacher.dashboard"));
                }
            } else {
                return redirect()->route('login')->with('error', 'Invalid credentials. Please try again.');
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
    public function resultcreate($id)
    {
        // Create an associative array representing the JSON data
        $resultsData = [
            'math' => 95,
            'science' => 88,
            'history' => 76,
            'english' => 92,
        ];

        // Insert a new result
        Result::create([
            'user_id' => $id, // Assuming you have a user with ID 1
            'results' => $resultsData,
            'semester' => 1, // Assuming it's the first semester
        ]);

    }
    // public function edituser($id){
    //      dd($id);
    // }
}