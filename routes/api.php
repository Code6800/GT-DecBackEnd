<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;


Route::prefix('users')->group(function () {
    Route::post('/', [UserController::class, 'store'])->name('users.create');        // Create account
    Route::post('/login', [UserController::class, 'login'])->name('users.login');    // Login
    Route::get('/{id}', [UserController::class, 'show'])->name('users.show');        // Get user details
    
    // Verification routes
    Route::post('/send-verification', [UserController::class, 'sendVerificationCode'])->name('users.send-verification');
    Route::post('/verify-account', [UserController::class, 'verifyAccount'])->name('users.verify-account');
});


Route::get('/api-docs.json', function () {
    return response()->file(storage_path('api-docs/api-docs.json'), [
        'Content-Type' => 'application/json',
    ]);
});



Route::get('/test', function () {
    return response()->json(['message' => 'API is working!']);
});

// Future API endpoints go here