<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profilinfos() {
        return view('personnelfolder.comptes.profile');
    }
}
