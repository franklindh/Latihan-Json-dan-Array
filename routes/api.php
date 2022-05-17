<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/kelas','App\Http\KelasController@getDatakelas');
Route::get('/kelas/{idkelas}','App\Http\KelasController@getDatakelasById');
Route::put('/kelas','App\Http\'KelasController@updateDataGuru');
Route::delete('/kelas','App\Http\'KelasController@deleteDataGuru');
Route::get('/latihan1','App\Http\'LatihanJson@getDataGuruKelas');
Route::get('/latihan2','App\Http\'LatihanJson@getDataGuruKelas2');
Route::get('/latihan3','App\Http\'LatihanJson@getDataGuruKelas3');