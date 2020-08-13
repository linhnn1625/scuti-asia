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

Route::get('/', 'HomeController@index');


Route::group(['prefix'=>'admin'], function(){
    Route::get('/login',[
        'as' => 'login',
        'uses' => 'AdminController@login'
    ]);
    Route::post('/login',[
        'as' => 'post-login',
        'uses' => 'AdminController@postLoginAdmin'
    ]);
    Route::get('/logout',[
        'as' => 'admin.logout',
        'uses' => 'AdminController@getLogOut'
    ]);
    Route::get('/forgot','AdminController@forgot');

    Route::get('/',[
        'as' => 'admin.home',
        'uses' => 'AdminController@index'
    ]);

    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', ['as'=>'admin.roles','uses'=>'RoleController@index']);
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', ['as'=>'admin.users','uses'=>'UserController@index']);
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [
            'as' => 'categories.index',
            'uses' => 'CategoryController@index'
        ]);
    });

    Route::resource('locations', 'LocationController')->names(
        [
        'index' => 'location.index',
        'store' => 'location.store',
        'edit' => 'location.edit',
        'update' => 'location.update',
        'destroy' => 'location.destroy',
        ]
    );
    
    Route::group(['prefix' => 'jobs'], function () {
        Route::get('/', [
            'as' => 'job.index',
            'uses' => 'JobController@index'
        ]);
    });
});