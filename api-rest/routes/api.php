<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\dogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('dogs', 'App\Http\Controllers\dogController@index');

Route::get('dogs/{id}', 'App\Http\Controllers\dogController@show');

Route::post('dogs', 'App\Http\Controllers\dogController@store');

Route::put('dogs/{id}', 'App\Http\Controllers\dogController@update');

Route::delete('dogs/{id}', 'App\Http\Controllers\dogController@destroy');

Route::get('api', 'App\Http\Controllers\dogController@api');

Route::get('apipost', 'App\Http\Controllers\dogController@apipost');
