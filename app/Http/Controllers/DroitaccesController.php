<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DroitaccesController extends Controller
{
    public function role() {
        return view('personnelfolder.comptes.droitacces');
    }
}
