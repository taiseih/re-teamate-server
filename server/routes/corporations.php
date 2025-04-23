<?php

declare(strict_types=1);

use App\Http\Controllers\Corporations\CorporationController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [CorporationController::class, 'login'])->name('login');
