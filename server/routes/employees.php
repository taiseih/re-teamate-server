<?php

declare(strict_types=1);

use App\Http\Controllers\Employees\EmployeeController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [EmployeeController::class, 'login'])->name('login');
