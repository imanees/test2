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
    return view('home');
});
Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');
Route::get('/balanceTransfer', function () {
    return view('balanceTransfer');
})->middleware('auth');
Route::get('/paymentGateway', function () {
    return view('paymentconf');
})->middleware('auth');
Route::get('/ratePlanDetails', function () {
    return view('ratePlan');
})->middleware('auth');
Route::get('/topUpRatePlanDetails', function () {
    return view('topUpRate');
})->middleware('auth');
Route::get('/paymentView', function () {
    return view('paymentView');
})->middleware('auth');
Route::get('/costCalculator', function () {
    return view('costCalculator');
});
Route::get('login', [ 'as' => 'login', 'uses' => 'LoginController@create']);
Route::post('login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout')->name('logout');