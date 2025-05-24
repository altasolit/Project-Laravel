<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    // public function index() {
    //     return view('admin.dashboard');
    // }
    
    public function adminDashboard()
    {
        // if (Auth::user()->role !== 'admin') {
        //     return redirect()->route('home');
        // }
        dd('masuk dashboard admin');
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            return redirect()->route('customer.profile');
        }
        return view('admin.dashboard');
    }

    public function customerDashboard()
    {
        if (!Auth::check() || Auth::user()->role !== 'customer') {
            return redirect()->route('admin.dashboard');
        }

        return view('customer.dashboard'); 

    }
}

