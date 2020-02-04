<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('about', function (){
    return view('about');

});

Route::get('contact', function (){
    return view('contact');

});

Route::get('dlogin', function(){
    return view('dlogin');

});

Route::get('faq', function () {
    return view('faq');
});

Route::get('patient_id_search', function () {
    return view('doctor/patient_id_search');
});

Route::get('doctor_dashboard', function () {
    return view('doctor/doctor_dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('Dashboard');
