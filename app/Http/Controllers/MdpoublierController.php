<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MdpoublierController extends Controller
{
    public function mdp() {
        return view('personnelfolder.connexion.mdpoublier');
    }
}
