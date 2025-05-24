<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        // if (Auth::check()) {
        //     if (Auth::user()->role == 'admin') {
        //         return $next($request);
        //     } elseif (Auth::user()->role == 'customer') {
        //         return redirect()->route('customer.dashboard');
        //     } else {
        //         return redirect()->route('login');
        //     }
        // }
        return redirect()->route('login');
        if (Auth::check()) {
            if (Auth::user()->role == 'admin') {
                return $next($request);
            } elseif (Auth::user()->role == 'customer') {
                return redirect()->route('customer.dashboard');
            } else {
                return redirect()->route('customer.dashboard');
            }
        }

        return redirect('/customer/dashboard')->with('error', 'Akses Ditolak');
    }
}
