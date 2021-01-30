<?php

use Illuminate\Support\Facades\Route;



Route::get('/login', 'AuthController@login');
Route::POST('/login/post', 'AuthController@postLogin');
Route::get('/register', 'AuthController@register');
Route::post('/postRegister', 'AuthController@postRegister');
Route::get('/logout', 'AuthController@logout');


Route::get('/', 'HomeController@index')->name('home');
Route::get('/{id}/detail', 'HomeController@show');
Route::get('/{id}/create', 'HomeController@create');
Route::POST('/{id}/store', 'HomeController@store');
Route::get('/{id}/delete', 'HomeController@destroy');
