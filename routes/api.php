<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('vagas', 'App\Http\Controllers\api\VagasController');