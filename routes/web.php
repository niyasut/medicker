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
// ..............................Login Controller.......................................


Route::get('patient_id_search', function () {
    return view('doctor/patient_id_search');
});

Route::get('doctor_dashboard', function () {
    return view('doctor/doctor_dashboard');
});

Route::get('patient_dashboard', function () {
    return view('patient/patient_dashboard');
});

Route::get('admin_dashboard', function () {
    return view('admin/admin_dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('Dashboard');





 route::group(['middleware' => ['auth','admin']], function(){

// .......................Showing Auth Needed.........................




    Route::get('/patient_id_search', 'HomeController@index');

    

    Route::get('patient_id_search', function () {
        return view('doctor/patient_id_search');
    });
    
    Route::get('doctor_dashboard', function () {
        return view('doctor/doctor_dashboard');
    });
    
    Route::get('patient_dashboard', function () {
        return view('patient/patient_dashboard');
    });
    
    Route::get('admin_dashboard', function () {
        return view('admin/admin_dashboard');
    });
    



 });
