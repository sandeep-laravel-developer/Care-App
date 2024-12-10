<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('employee-list', [EmployeeController::class, 'index']); // For listing employee
Route::post('employee-add', [EmployeeController::class, 'store']); // For creating a new employee
