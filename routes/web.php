<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers;

Route::get('/', function()
{
    return view('login');
});
Route::POST('/login', [LoginController::class, 'login']);
Route::get( '/dashboard', [ TasksController::class, 'index' ] );
Route::get( '/tasks', [ TasksController::class, 'index' ] );

Route::get( '/tasks/create', [ TasksController::class, 'create' ] );

Route::post( '/tasks', [ TasksController::class, 'store' ] );

// Route::put( '/tasks/{id}/update', [ TasksController::class, 'edit' ] );

// Route::post( '/tasks', [ TasksController::class, 'update' ] );

Route::delete( '/tasks/{id}', [ TasksController::class, 'delete' ] );

