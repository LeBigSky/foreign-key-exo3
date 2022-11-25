<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home (){
        $users = User::all();
        $profils = Profil::all();
        return view ('home', compact('users', 'profils'));

    }
}
