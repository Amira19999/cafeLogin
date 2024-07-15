<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cafe;
use Illuminate\Support\Facades\Auth;
use App\Http\HomeController;
use App\Http\Controllers\Admin;
Route::get('/loadmin', function () {
    return view('loadmin');
});

Route::get('/',[Cafe::class,'index'])->name('index');
Route::get('/menu',[Cafe::class,'menu'])->name('menu');
Route::get('/About',[Cafe::class,'About'])->name('About');
Route::get('/Items',[Cafe::class,'Items'])->name('Items');
Route::get('/Contact',[Cafe::class,'Contact'])->name('Contact');


//Admin

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');

Route::get('/addCategory',[Admin::class,'addCategory'])->name('addCategory');
Route::get('/addBeverage',[Admin::class,'addBeverage'])->name('addBeverage');
Route::get('/addUser',[Admin::class,'addUser'])->name('addUser');
Route::get('/beverages',[Admin::class,'beverages'])->name('beverages');
Route::get('/categories',[Admin::class,'categories'])->name('categories');
Route::get('/editBeverage',[Admin::class,'editBeverage'])->name('editBeverage');
Route::get('/editCategory',[Admin::class,'editCategory'])->name('editCategory');
Route::get('/edituser',[Admin::class,'edituser'])->name('edituser');
Route::get('/messages',[Admin::class,'messages'])->name('messages');
Route::get('/showMessage',[Admin::class,'showMessage'])->name('showMessage');
Route::get('/users',[Admin::class,'users'])->name('users');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
