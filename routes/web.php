<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'NewController@login')->middleware(['guest']);

Route::get('/{any}', 'SpaController@index')->where('any', '.*');
Auth::routes();




