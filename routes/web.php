<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/prueba', function () {
    return view('prueba');
});

Route::get('/help', function () {
    return view('help');
});

Route::get('/chart', function () {
    return view('chart');
});

<<<<<<< HEAD
Route::get('/sistema', function () {
    return view('sistema');
});

Route::get('/ajustes', function () {
    return view('ajustes');
});
=======
>>>>>>> 228186c398cf7a59aaddfae88a71854873708c9c

Route::get('sesion', function () {
    return View::make('sesion');
});

Route::post('sesion', function () {
    Session::put('correo', Input::get('correo'));
    Session::flash('nombre', Input::get('nombre'));
    $cookie = Cookie::make('ciudad', Input::get('ciudad'), 30);
    return Redirect::to('sesion-2')->withCookie($cookie);
});
Route::get('sesion-2', function(){
    $return = '<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>';
    $return .= '<p>Tu correo de la sesion es: '. Session::get('correo') .'.<br>';
    $return .= 'Tu nombre es: '. Session::get('nombre') .'.<br>';
    $return .= 'La ciudad de la cookie es: '. Cookie::get('ciudad') .'.<br></p>';
    echo $return;
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<<<<<<< HEAD
Route::get('/historial', 'HistorialController@index');

Route::delete('/destroy/{id}', 'HistorialController@destroy');
=======
<<<<<<< HEAD
Route::get('/historial', 'HistorialController@index');

Route::delete('/historial/destroy/{id}', 'HistorialController@destroy');
=======
Route::get('/historial', 'HistorialController@listHistorial');
>>>>>>> 4db9cb428566562a9eb180ff8d85f531e4179cad
>>>>>>> 228186c398cf7a59aaddfae88a71854873708c9c

Route::get('/users/index', 'UsersController@index');

Route::get('/users/create', 'UsersController@create');

Route::post('/users/store', 'UsersController@store');

Route::post('/users/store', 'UsersController@store');

Route::get('/users/edit/{id}', 'UsersController@edit');

Route::put('/users/update/{id}', 'UsersController@update');

Route::delete('/users/destroy/{id}', 'UsersController@destroy');


<<<<<<< HEAD
Route::get('/users/show/{id}', 'UsersController@show');
=======

>>>>>>> 228186c398cf7a59aaddfae88a71854873708c9c



 
