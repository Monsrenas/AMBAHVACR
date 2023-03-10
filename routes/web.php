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
    return view('index');
});

Route::get('vehicle', function () {
    return view('vehicle');
});

Route::get('/modalview','App\Http\Controllers\VistasControllers@modalview');


Route::group(['middleware' => ['web']], function () {

		Route::get('lang/{lang}', function ($lang) {	
						        session(['lang' => $lang]);
						        return \Redirect::back();
						    })->where(['lang' => 'en|es']);
});