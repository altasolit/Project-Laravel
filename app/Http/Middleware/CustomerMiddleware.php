<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CustomerMiddleware
{
    public function handle($request, Closure $next)
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
    }
}
