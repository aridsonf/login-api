<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return response()->json(['message' => 'Login page']);
})->name('login');

Route::get('/', function () {
    return response()->json(['message' => 'Test']);
});
