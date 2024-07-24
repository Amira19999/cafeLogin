<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cafe;
use Illuminate\Support\Facades\Auth;
use App\Http\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ControllerCategories;
use App\Http\Controllers\BeverageController;
use App\Http\Controllers\MessagesController;

Route::get('/test', function () {
    return view('test');
});
//cafe
Route::get('/',[Cafe::class,'index'])->name('index');
Route::get('/menu',[Cafe::class,'menu'])->name('menu');
Route::get('/About',[Cafe::class,'About'])->name('About');
Route::get('/Items',[Cafe::class,'Items'])->name('Items');
Route::get('/Contact',[Cafe::class,'Contact'])->name('Contact');
Route::get('/test',[Cafe::class,'index'])->name('index');

//auth
Auth::routes(['verify'=> true]);

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');

//CRUD   user
Route::post('/users',[UserController::class,'index'])->name('users');
Route::get('/users',[UserController::class,'index'])->name('users');   
Route::get('/addUser',[UserController::class,'create'])->name('addUser');
Route::post('/StoreUser',[UserController::class,'store'])->name('StoreUser');
Route::get('users/edituser/{id}',[UserController::class,'edite'])->name('edite');
Route::put('updateUser/{id}', [UserController::class, 'update'])->name('updateUser');


//CRUD   category
Route::get('/addCategory',[ControllerCategories::class,'create'])->name('addCategory');
Route::post('/StoreCategory',[ControllerCategories::class,'store'])->name('StoreCategory');
Route::get('/categories',[ControllerCategories::class,'index'])->name('Category');
Route::get('/editcategory/{id}',[ControllerCategories::class,'edit'])->name('editcategory');
Route::put('updatecategory/{id}', [UserController::class,'update'])->name('updatecategory');
Route::get('/delete/category/{id}',[ControllerCategories::class,'destroy'])->name('delete');

  
//CRUD Beverage 
Route::get('/beverages',[BeverageController::class,'index'])->name('beverages');     
Route::get('/addBeverage',[BeverageController::class,'create'])->name('addBeverage'); 
Route::post('/storeBeverage',[BeverageController::class,'store'])->name('storeBeverage');
Route::get('/editBeverage/{id}',[BeverageController::class,'edit'])->name('edit');
Route::put('updateBeverage/{id}', [BeverageController::class,'update'])->name('updateBeverage');
Route::get('/deleteBeverage/{id}',[BeverageController::class,'destroy'])->name('deleteBeverage');


//CRUD Messages
Route::get('/messages',[MessagesController::class,'index'])->name('messages');   
Route::get('/add/messages',[MessagesController::class,'create'])->name('add/messages'); 
Route::post('/storemessages',[MessagesController::class,'store'])->name('storemessages'); 
Route::post('/show/messages/',[MessagesController::class,'show'])->name('show/messages'); 
Route::get('/editmessage/{id}',[MessagesController::class,'edit'])->name('editmessage');
Route::get('/deleteMessage/{id}',[MessagesController::class,'destroy'])->name('deleteMessage');

