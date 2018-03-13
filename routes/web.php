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
/*Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');*/
Route::get('/balanceTransfer', function () {
    return view('balanceTransfer');
})->middleware('auth');
Route::get('/paymentGateway', function () {
    return view('paymentconf');
})->middleware('auth');

/*Route::get('/ratePlanDetails', function () {
    return view('ratePlan');
})->middleware('auth');*/

Route::get('/topUpRatePlanDetails', function () {
    return view('topUpRate');
})->middleware('auth'); //mtu rate
Route::get('/paymentView', function () {
    return view('paymentView');
})->middleware('auth');
Route::get('/costCalculator', function () {
    return view('costCalculator');
})->middleware('auth');
/*Route::get('/history', function () {
    return view('history');
})->middleware('auth');*/
Route::get('/addRecharge', function () {
    return view('addRecharge');
})->middleware('auth');
Route::get('/RechargeAccount', function () {
    return view('rechargeAccount');
})->middleware('auth');
Route::get('/packages', function () {
    return view('packages');
})->middleware('auth');

Route::get('/profile', 'PageController@profile');

Route::post('/paymentView', 'PageController@rechargeHistory');

Route::get('/history', 'PageController@history');
Route::get('/ajax/{id}', 'PageController@ajax');
Route::post('/history', 'PageController@historyFilter');

Route::get('/ratePlanDetails', 'PageController@myRate');
Route::post('/topUpRatePlanDetails', 'PageController@mtuRate'); 

Route::get('login', [ 'as' => 'login', 'uses' => 'LoginController@create']);
Route::post('login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout')->name('logout');



//to display password {{Session::get('password')}}
//	pull method will retrieve and delete an item from the session in a single statement  
//eg: $value = $request->session()->pull('key', 'default');