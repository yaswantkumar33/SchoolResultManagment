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
            $records = Result::where('user_id', auth()->user()->id)->where('semester','1')->get();
        // dd($records[0]);
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

        $students = user::where('role','student')->get();
        // dd($students);

        return view('teacherDashboard',['students'=>$students]);
    }
    // public function teacherstdresults($id){

    //     $studentresult =Result::where('user_id',$id)->get();
    //     dd($studentresult);
    //     // dd("teacher students results route hit !!",$id);
    // }
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
    public function edituser(Request $request){
         $name = $request->username;
         $email = $request->email;
         $phonenumber = $request->phonenumber;
         $Dob = $request->Dob;
         $edituser=User::where('id',auth()->user()->id)->update(['username'=>$name,'useremail'=>$email,'phonenumber'=>$phonenumber,"dob"=>$Dob]);
         return response()->json(['sucess'=>true,'data'=>$edituser]);
    }
    public function Fetchresults(Request $request){
        $results = Result::where('user_id',$request->stud_id)->where('semester',$request->semister)->get();
        $decodedcode = json_decode($results[0]->results, true);
        $totalScore = array_sum($decodedcode);
        $percentage = number_format(($totalScore / 500) * 100, 2) . '%';
        $rows = view('resultsrow', compact('decodedcode'))->render();
        return response()->json([
            'rows' => $rows,
            'totalScore' => $totalScore,
            'percentage' => $percentage,
        ]);

    }
    public function deletestud($id){
        // dd('delete student is called from the teachers dashboard',$id);
        User::where('id',$id)->delete();
        return redirect('/teacher');
    }
    public function userwithresults($id){
        // Fetch user with results
        $usersWithResults = User::with('results')->find($id);
        dd($usersWithResults->results);

    }
}