<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cafe;
use Illuminate\Support\Facades\Auth;
use App\Http\HomeController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ControllerCategories;
use App\Http\Controllers\BeverageController;
Route::get('/test', function () {
    return view('test');
});

Route::get('/',[Cafe::class,'index'])->name('index');
Route::get('/menu',[Cafe::class,'menu'])->name('menu');
Route::get('/About',[Cafe::class,'About'])->name('About');
Route::get('/Items',[Cafe::class,'Items'])->name('Items');
Route::get('/Contact',[Cafe::class,'Contact'])->name('Contact');
Route::get('/test',[Cafe::class,'index'])->name('index');

//Admin

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');




Route::post('/users',[UserController::class,'index'])->name('users');//CRUD   user
Route::get('/users',[UserController::class,'index'])->name('Users');   
Route::get('/addUser',[UserController::class,'create'])->name('addUser');
Route::post('/StoreUser',[UserController::class,'store'])->name('StoreUser');
Route::get('/edit/{id}',[UseController::class,'edit'])->name('edit');

Route::get('/Add/Category',[ControllerCategories::class,'create'])->name('addCategory');//CRUD   category
Route::post('/StoreCategory',[ControllerCategories::class,'store'])->name('StoreCategory');
Route::get('/category',[ControllerCategories::class,'index'])->name('Category');
Route::get('/edit/{id}',[ControllerCategories::class,'edit'])->name('edit');

Route::get('/Beverage',[BeverageController::class,'index'])->name('Beverage');//CRUD Beverage 
Route::get('/addBeverage',[BeverageController::class,'create'])->name('addBeverage'); 
Route::post('/store/Beverage',[BeverageController::class,'store'])->name('storBeverage');
Route::get('/edit/{id}',[BeverageController::class,'edit'])->name('edit');

//ارجع على EDIT /DELET