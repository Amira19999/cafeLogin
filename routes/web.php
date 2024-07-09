<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cafe;
use Illuminate\Support\Facades\Auth;
use App\Http\HomeController;
//Route::get('/', function () {
  //  return view('test');
//});

//Route::get('/',[Cafe::class,'index'])->name('index');
Route::get('/menu',[Cafe::class,'menu'])->name('menu');
Route::get('/About',[Cafe::class,'About'])->name('About');
Route::get('/Items',[Cafe::class,'Items'])->name('Items');
Route::get('/Contact',[Cafe::class,'Contact'])->name('Contact');

Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');
