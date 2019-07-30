<?php


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();


Route::group(['prefix' => '','middleware' => 'auth'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'App\AppController@index']);
});