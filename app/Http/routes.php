<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(
    [
        'middleware' => [
            'web'
        ],
    ],
    function () {
        //
        Route::group(
            [
                'prefix' => 'view',
            ],
            function () {
                //
                Route::get('/home', 'HomeController@index');

                Route::get('/login', 'Authentication\AuthController@getLogin');
                Route::get('/register', 'Auth\AuthController@getRegister');

                Route::get('/profile', 'ProfileController@getIndex');
            }
        );
        Route::group(
            [
                'prefix' => 'api',
            ],
            function () {
                //
                Route::post('/login', 'Authentication\AuthController@postLogin');
                Route::post('/register', 'Authentication\AuthController@postRegister');
            }
        );
    }
);
