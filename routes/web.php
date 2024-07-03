<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/userform', function () {
    return view('userlogin');
});
Route::post('/formsubmit', function (Request $request) {
    // dd($request->all());
    $name = $request->username;
    dd($name);
    redirect('/test');
});
Route::get('test2/{id}', function ($id) {
    redirect()->route('NamedRoute');
});

Route::get('this/iss/the/name/route', function () {
    dd("named route");
})->name("NamedRoute");
Route::group(['prefix' => 'admin'], function () {
    Route::get('/settings', function () {
        return "Settings Route";
    });
    Route::get('/UserAdmin', function () {
        return "User Admin Route";
    });
});
