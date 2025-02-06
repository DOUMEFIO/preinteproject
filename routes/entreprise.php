<?php

use App\Http\Controllers\EntrepriseController;
use Illuminate\Support\Facades\Route;

Route::get('touteentreprise',[EntrepriseController::class ,'allentreprise'])->name('touteentreprise');
