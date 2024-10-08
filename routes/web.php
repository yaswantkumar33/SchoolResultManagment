<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentsController;

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/test', function () {
//     return view('test');
// });
// Route::get('/userform', function () {
//     return view('userlogin');
// });
// Route::post('/formsubmit', function (Request $request) {
//     // dd($request->all());
//     $name = $request->username;
//     dd($name);
//     redirect('/test');
// });
// Route::get('test2/{id}', function ($id) {
//     redirect()->route('NamedRoute');
// });
// Route::get('/aboutus', [HomeController::class, 'aboutus']);

// Route::get('this/iss/the/name/route', function () {
//     dd("named route");
// })->name("NamedRoute");
// Route::group(['prefix' => 'admin'], function () {
//     Route::get('/settings', function () {
//         return "Settings Route";
//     });
//     Route::get('/UserAdmin', function () {
//         return "User Admin Route";
//     });
// });



// students route


// Route::get('/students', [StudentsController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/register', [HomeController::class, 'register'])->name('student.register');
Route::post('/store', [HomeController::class, 'storeStudent'])->name('student.store');
Route::post('/registeruser', [HomeController::class, 'registeruser']);
Route::post('/userlogin', [HomeController::class, 'userlogin']);
Route::get('/logout', [HomeController::class, 'logout']);
Route::post('/UpdateUser',[HomeController::class,'edituser']);
Route::get('/teacher', [HomeController::class, 'teacher'])->name("teacher.dashboard");
// Route::get('/teacher', [HomeController::class, 'teacher'])->name("teacher.dashboard");
// Route::get('/rcreate/{id}', [HomeController::class, 'resultcreate']);
Route::post('/Fetchresults',[HomeController::class,'FetchResults'])->name('SemResults');
// Teacher routes
Route::get('/teacher', [HomeController::class, 'teacher'])->name("teacher.dashboard");
Route::get('/studresults/{id}', [HomeController::class, 'teacherstdresults'])->name("teacher.stdresults");
Route::get('/deletestud/{id}', [HomeController::class, 'deletestud']);
Route::get('/userwithresults/{id}', [HomeController::class,'userwithresults']);