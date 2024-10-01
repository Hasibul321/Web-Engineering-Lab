<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/view-all', [EmployeeController::class, 'getAll']);
Route::get('/delete/{id}', [EmployeeController::class, 'deleteById']);
Route::get('/create', [EmployeeController::class, 'create']);
Route::post('/create', [EmployeeController::class, 'createEmployee']);
Route::get('/update/{id}',[EmployeeController::class,'updateview']);
Route::post('/update',[EmployeeController::class,'update']);
Route::post("/search", [EmployeeController::class, 'search']);