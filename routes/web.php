<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/jobs');

Route::resource('jobs', JobController::class);
