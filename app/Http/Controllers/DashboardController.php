<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function adminDashboard()
    {
        if (Auth::user()->role !== 'admin') {
            return redirect()->route('home');
        }
        return view('admin.dashboard'); // File: resources/views/admin-dashboard.blade.php
    }

    public function customerDashboard()
    {
        if (Auth::user()->role !== 'customer') {
            return redirect()->route('dashboard');
        }
        return view('customer.dashboard'); // File: resources/views/customer-dashboard.blade.php
    }
}

