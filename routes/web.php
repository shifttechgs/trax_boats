<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('projects', [\App\Http\Controllers\ProjectsController::class, 'projectsPages'])->name('projects.index');
Route::get('contact', [\App\Http\Controllers\ContactController::class, 'contactPage'])->name('contact.index');
