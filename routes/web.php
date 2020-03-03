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

use App\Http\Controllers\HomeController;

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

 Auth::routes();
// Auth::routes(['register' => false]);
// Auth::routes(['verify' => true]);




//  .....................Login with user-type..........................
// ......................admin auth........................
 route::group(['middleware' => ['auth','admin']], function(){

    Route::get('/admin_dashboard', 'AdminController@admin');
    route::get('add_doctor','AdminController@doctor');
    route::get('/users', 'AdminController@users');
    route::get('/user_edit/{id}', 'AdminController@useredit');
    route::put('/user_update/{id}','AdminController@userupdate');
    route::delete('/user_delete/{id}','AdminController@userdelete');
    route::post('/add_newuser','AdminController@addnewuser');
    route::get('/listofdoctors', 'AdminController@listofdoctors');
    route::get('/patientslist', 'AdminController@patientslist');
    route::put('/patient_update/{id}','AdminController@patientupdate');
    route::post('/add_newpatient','AdminController@addnewpatient');
   
 });
// ......................Doctor auth........................
 route::group(['middleware' => ['auth','doctor']], function(){
    Route::get('/doctor_dashboard', 'HomeController@index');
    route::get('/patient_details', 'HomeController@patientidsearch');
    Route::post('/doctor_dashboard', 'HomeController@updateavatar');
    Route::get('/addprescription','HomeController@addprescription');
});
// ......................patient auth........................
route::group(['middleware' => ['auth','patient']], function(){
    Route::get('/patient_dashboard', 'PatientController@index');
    
    
  
    
});