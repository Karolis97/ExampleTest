<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('beneficiaries', 'GeneratorController@index');
Route::get('beneficiaries/{id}', 'GeneratorController@read');
Route::post('beneficiaries', 'GeneratorController@create');
Route::put('beneficiaries/{id}', 'GeneratorController@update');
Route::delete('beneficiaries/{id}', 'GeneratorController@delete');
Route::get('beneficiaries/{id}/qr-codes', 'GeneratorController@code');