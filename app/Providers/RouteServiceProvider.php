<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;


class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
    public const HOME = '/dashboard'; // Default

    // Ubah berdasarkan role user saat login
    protected function authenticated(Request $request, $user)
    {
        if ($user->role === 'Admin') {
            return redirect('/admin/dashboard');
        }
        return redirect('/customer/dashboard');
    }

}
