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

Route::get('/welcome', function () {

    // render view @sane
    // use Illuminate\Support\Facades\View 
    return View::make('welcome');

    // use Helper
    // return view('welcome');
});

Route::get('/', function () {
    return view(
        'weilan/index' ,
        [ 'year' => date("Y") ]
    );
});

Route::get('/service', function () {
    return view(
        'weilan/service' ,
        [ 'year' => date("Y") ]
    );
});

Route::get('/contact', function () {
    return view(
        'weilan/contact' ,
        [ 'year' => date("Y") ]
    );
});

Route::get('/email/{name?}/{email?}' , 'Weilan\MessageController@email');

Route::match(['get','post'] , '/message' , 'Weilan\MessageController@message' );

Route::get('/notificate' , 'Weilan\MessageController@notificate');
