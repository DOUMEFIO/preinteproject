<?php

use App\Http\Controllers\DroitaccesController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;



Route::get('permissions',[PermissionController::class ,'allpermission'])->name('permissions');
Route::get('droitacces',[DroitaccesController::class ,'role'])->name('droitacces');
Route::get('allusers',[UsersController::class ,'allusers'])->name('allusers');
Route::get('profile',[ProfilController::class ,'profilinfos'])->name('profile');
