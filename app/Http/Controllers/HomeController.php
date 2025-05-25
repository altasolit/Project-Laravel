<?php

namespace App\Http\Controllers;
use App\Models\Room; 
use App\Models\Fasilitas; 

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    $rooms = Room::with('fasilitas')->get(); 
    return view('home', compact('rooms'));
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
