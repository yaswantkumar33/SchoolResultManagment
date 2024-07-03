<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentsController;

Route::get('/', function () {
    return view('welcome');
});
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


Route::get('/students', [StudentsController::class, 'index']);
