<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('vulnerable');
});

Route::get('/read-file', [App\Http\Controllers\VulnerableController::class, 'readFile']);