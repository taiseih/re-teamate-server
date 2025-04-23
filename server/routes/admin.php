<?php

declare(strict_types=1);

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;


Route::post('/login', [AdminController::class, 'login'])->name('login');
