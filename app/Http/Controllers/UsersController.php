<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function allusers() {
        return view('personnelfolder.comptes.users');
    }
}
