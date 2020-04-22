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

Auth::routes();

Route::get('/home', 'EventtypeController@show');

Route::get('/event/add', 'EventtypeController@addevent');
Route::get('/event/edit/{id}', 'EventtypeController@editevent');

Route::post('/event/save', 'EventtypeController@saveevent');
