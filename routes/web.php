<?php

use Illuminate\Support\Facades\Route;

Route::get('/logintospa', 'NewController@login')->middleware(['guest'])->name('logintospa');

Route::get('/{any}', 'SpaController@index')->where('any', '.*');
Auth::routes();




