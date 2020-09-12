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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('register', 'UserController@store')->name('register');

//**************First time login verification routes*********************
Route::group(['middleware' => ['cors']], function () {
	Route::post('verify_id', 'Api\VerifyStaffController@verifyStaffID');
	Route::post('verify_email_code', 'Api\VerifyStaffController@verifyEmailCode');
	Route::post('set_password', 'Api\VerifyStaffController@saveNewPassword');
	Route::post('login', 'Api\UserController@login');
	Route::get('logout', 'Api\UserController@logout');
});