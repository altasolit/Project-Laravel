<?php

namespace App\Http\Controllers;
use App\Models\Room; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    $rooms = Room::all();
    return view('home', compact('rooms')); // Kirim data ke view
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
