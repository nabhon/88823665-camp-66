<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

use App\Http\Middleware\CheckLogin;

Route::get('/product',
    [ProductController::class, 'index'])->middleware([CheckLogin::class]);

Route::post('/product',
    [ProductController::class, 'store'])->middleware([CheckLogin::class]);

Route::get('/home',
    [HomeController::class, 'home'])->middleware([CheckLogin::class]);

Route::get('/',
    [HomeController::class, 'home'])->middleware([CheckLogin::class]);  
    
Route::get('/logout', function () {
    session()->forget('user');
    return redirect('/login');
    });
    
Route::get('/login',
    [LoginController::class, 'index']);

Route::post('/login',
    [LoginController::class, 'login']);

Route::get('/user' ,
    [UserController::class, 'index']); 

Route::get('/register' ,
    [RegisterController::class, 'register']); 

Route::post('/register' ,
    [RegisterController::class, 'create']);    

Route::get('/user/{id}' ,
    [UserController::class, 'edit']);

Route::put('/user' ,
    [UserController::class, 'edit_action']);

Route::delete('/user',
    [UserController::class, 'delete']);

Route::get('/hello', function () {
    return "<h1>Hello World!</h1>";
});

Route::get("/mycontroller/{id?}", 
    [MyController::class, 'myfunction']);

Route::post("/mycontroller/{id?}", 
    [MyController::class, 'myfunction']);