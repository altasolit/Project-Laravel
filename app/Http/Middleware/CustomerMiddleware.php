<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CustomerMiddleware
{

    // public function handle($request, Closure $next)

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'customer') {
                return $next($request);
            } else {
                return redirect()->route('customer.dashboard');
            }
        } else {
            return redirect()->route('admin.dashboard');
        }

        return redirect('/admin/dashboard')->with('error', 'Akses Ditolak');

    }
}

