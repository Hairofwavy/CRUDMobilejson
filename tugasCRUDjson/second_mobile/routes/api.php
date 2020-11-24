<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::resource('majors','MajorController');
Route::post('majors/{id}','MajorController@update');

Route::resource('universities','UniversityController');
Route::post('universities/{id}','UniversityController@update');

Route::resource('students','StudentController');
Route::post('students/{id}','StudentController@update');
Route::post('students/{nim}/delete','StudentController@destroy');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
