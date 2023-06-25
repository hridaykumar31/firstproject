<?php

use Illuminate\Support\Facades\Route;

// Route::get('/history',function()
// {
//  return viwe('history');
// });
Route::get('/', 'App\Http\Controllers\CalculatorController@index');
Route::post('/calculate', 'App\Http\Controllers\CalculatorController@calculate');
Route::get('/history', 'App\Http\Controllers\HistoryController@History');
Route::get('/newpage', 'App\Http\Controllers\newcontroller@new');
