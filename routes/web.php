<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::view('forms', 'pages.forms')->name('forms');

Route::view('buttons', 'pages.buttons')->name('buttons');

Route::view('dropdowns', 'pages.dropdowns')->name('dropdowns');

Route::view('modals', 'pages.modals')->name('modals');

Route::view('alerts', 'pages.alerts')->name('alerts');


