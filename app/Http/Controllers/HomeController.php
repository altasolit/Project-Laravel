<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    
    public function customer(){
        return view('bookings');
    }

    public function profil(){
        return view('info');
    }

    public function profiledit(){
        return view('info');
    }
    
}
