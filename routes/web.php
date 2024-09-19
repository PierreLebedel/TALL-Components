<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::view('forms', 'pages.forms')->name('forms');

Route::view('alerts', 'pages.alerts')->name('alerts');
