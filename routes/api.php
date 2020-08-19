<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Generator;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('beneficiaries', 'GeneratorController@index');
Route::get('beneficiaries/{id}', 'GeneratorController@read');
Route::post('beneficiaries', 'GeneratorController@create');
Route::put('beneficiaries/{id}', 'GeneratorController@update');
Route::delete('beneficiaries/{id}', 'GeneratorController@delete');
Route::get('beneficiaries/{id}/qr-codes', 'GeneratorController@code');