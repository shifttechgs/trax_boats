<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('projects', [\App\Http\Controllers\ProjectsController::class, 'projectsPages'])->name('projects.index');
