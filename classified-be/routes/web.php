<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthManager;

Route::middleware("auth")->group(function(){
    Route::view('/', 'classified')->name('home');
});


Route::get('/login', [AuthManager::class, 'login'])->name('login');
Route::post('/login', [AuthManager::class, 'loginPost'])->name('login.post');

Route::get('/register/access', [AuthManager::class, 'register'])->name('register');
Route::post('/register/access', [AuthManager::class, 'registerPost'])->name('register.post');
Route::view('/agentregister', 'registry')->name('registry');

Route::view('/agentregistry', 'agent_registry')->name('agent_registry');
Route::post('/agentregistry', 'agent_registryPost')->name('agent_registry.post');