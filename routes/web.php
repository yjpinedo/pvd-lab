<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::redirect('/', '/home');

Route::middleware(['auth','verified'])->group(function () {
    Route::get('home', 'HomeController@index')->name('home');
    Route::resource('users', 'UserController', ['except' => ['create', 'edit']]);
});
