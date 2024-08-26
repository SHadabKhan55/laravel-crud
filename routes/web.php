<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
// Route::get('/', function () {
//     return view('index');
// });

Route::get("/", [UserController::class,"read"]);
Route::get("/del/{id}", [UserController::class,"delete"]);
Route::get("/edit/{id}", [UserController::class,"edit"])->name('edit');
Route::post("/insert", [UserController::class,"create"])->name('create');
Route::post("/update", [UserController::class,"update"])->name('update');
