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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/newReservation', function () {
    return view('createRes');
});
Route::post('/submit_newReservation', 'CreateReservationController@create_reservation');
Route::post('/search_Tables','SearchTablesController@search_tablesAv');
Route::post('/before_Conf','SearchTablesController@add_Table');
Route::get('/delete_Reservation/{idRes}','UpdateDeleteResController@delete_reservation');
Route::get('/continue_Deco','DecorationController@index');
Route::get('/confirmation_N','ConfirmationController@index');
Route::post('/conf_Final','ConfirmationController@save_toBD');
Route::get('/update_Reservation', function () {
    return view('updateData');
});
Route::post('/update_Reservation','UpdateDeleteResController@update_reservation');



Route::get('/home', 'HomeController@index')->name('home');
