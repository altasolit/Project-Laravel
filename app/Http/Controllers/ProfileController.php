<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function index()
    {
        return view('customer.profile');
    }

    public function showProfile()
    {
        $user = Auth::user(); // Mengambil user yang sedang login
        return view('customer.profile', compact('user'));
    }

    // public function edit(Request $request): View
    // {
    //     return view('profile.edit', [
    //         'user' => $request->user(),
    //     ]);
    // }

    public function edit(): View
    {
        $user =  Auth::user(); // atau Auth::user()
        return view('customer.edit', compact('user'));
    }
    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
    {
        $user =  Auth::user(); // user yang login

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'no_hp' => $request->no_hp,
        ]);

        return redirect()->route('customer.profile')->with('success', 'Profil berhasil diupdate!');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
