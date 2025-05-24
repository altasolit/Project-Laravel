<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index() {
        return view('admin.dashboard');
    }
    
    public function adminDashboard()
    {
        if (!Auth::check() || Auth::user()->role !== 'admin') {
            return redirect()->route('customer.dashboard');
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

