<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\dogController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




Route::apiResource('dogs', 'App\Http\Controllers\dogController');
