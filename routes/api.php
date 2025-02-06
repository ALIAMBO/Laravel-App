<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;

// Define a POST route for user login, handled by the 'login' method of the LoginController.
Route::post('login', [LoginController::class, 'login']);

// Define a POST route for user logout, handled by the 'logout' method of the LoginController.
Route::post('logout', [LoginController::class, 'logout']);

// Define a POST route for user registration, handled by the 'register' method of the RegisterController.
Route::post('register', [RegisterController::class, 'register']);

// Define a POST route for sending a password reset link email, handled by the 'sendResetLinkEmail' method of the ForgotPasswordController.
Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail']);

// Define a POST route for requesting email and password, handled by the 'requestEmailPassword' method of the ForgotPasswordController.
Route::post('request-email-password', [ForgotPasswordController::class, 'requestEmailPassword']);