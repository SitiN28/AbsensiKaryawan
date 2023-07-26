<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdministratorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/administrator',[AdministratorController::class,'show']);
Route::get('/administrator/add',[AdministratorController::class,'add']);
Route::post('/administrator/create',[AdministratorController::class,'create']);
Route::get('/administrator/hapus/{id}',[AdministratorController::class,'hapus']);
Route::get('/administrator/edit/{id}',[AdministratorController::class,'edit']);
Route::post('/administrator/update/{id}',[AdministratorController::class,'update']);
