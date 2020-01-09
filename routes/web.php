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
use App\Patient;
use App\Consultation;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/dash',      'LoginController@index');
Route::get('/login' ,    'LoginController@login');
Route::get('/logout' ,   'LoginController@logout');
Route::get('/patient',   'PatientController@index');
Route::get('/patients',   'PatientController@patShow');
Route::get('/patientAdd','PatientController@indexPatAdd');
Route::post('/patAdd',   'PatientController@store');
Route::get('/allAppointments',  'CalendarController@index');
Route::get('/addAppoint','AppointmentController@index');
Route::post('/apponitAdd','CalendarController@store');
Route::get('/addCons','ConsultationController@store');
Route::get('/showCons','ConsultationController@index');
Route::post('/consAdd','ConsultationController@registre');
Route::get('/ordShow','OrdonnanceController@index');
Route::get('/search','AutoCompleteController@search');
//Patients
Route::post('/patUpdate/{id}', [
            'uses' => 'PatientController@update2',
            'as' =>   'patUpdate.update2'
  ]  );


Route::get('/patShow/{id}',[
            'uses' => 'PatientController@show',
            'as'   =>  'patShow.show'
]);

Route::get('/patDelete/{id}',[
            'uses' => 'PatientController@destroy',
            'as'   =>  'patDelete.destroy'
]);


Route::get('/patUpdate/{id}',[
            'uses' => 'PatientController@update',
            'as'   =>  'patUpdate.update'
]);




//Rendez Vous

Route::get('/rdvDelete/{id}',[
            'uses' => 'AppointmentController@destroy',
            'as'   =>  'rdvDelete.destroy'
]);

Route::get('/rdvShow/{id}',[
            'uses' => 'AppointmentController@show',
            'as'   =>  'rdvShow.show'
]);



// Consultation
Route::get('/consDelete/{id}',[
            'uses' => 'ConsultationController@destroy',
            'as'   =>  'consDelete.destroy'
]);


//ordonnance
Route::get('/ordDelete/{id}',[
            'uses' => 'OrdonnanceController@destroy',
            'as'   =>  'ordDelete.destroy'
]);
