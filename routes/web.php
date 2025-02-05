<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MdpoublierController;
use Illuminate\Support\Facades\Route;

Route::get('login',[LoginController::class ,'connexion'])->name('login');
Route::get('mdpforget',[MdpoublierController::class ,'mdp'])->name('mdpforget');

Route::get('/', function () {
    return view('welcome');
});
require __DIR__.'/users.php';
