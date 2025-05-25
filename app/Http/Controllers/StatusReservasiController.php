<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class StatusReservasiController extends Controller
{
    /**
     * Menampilkan daftar reservasi customer dengan status pembayaran Pending.
     */
    public function index()
    {
        $reservasi = Reservation::with('room')
            ->where('user_id', Auth::id())
            ->where('payment_status', 'Pending')
            ->where('booking_status', '!=', 'Canceled')
            ->latest()
            ->get();

        return view('customer.status-reservasi.index', compact('reservasi'));
    }

    /**
     * Batalkan reservasi (hanya jika belum dibayar dan belum dibatalkan).
     */
    public function batalkan($id)
    {
        $reservasi = Reservation::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        if ($reservasi->payment_status === 'Pending' && $reservasi->booking_status !== 'Canceled') {
            $reservasi->update(['booking_status' => 'Canceled']);
            return redirect()->back()->with('success', 'Reservasi berhasil dibatalkan.');
        }

        return redirect()->back()->with('error', 'Reservasi tidak dapat dibatalkan.');
    }

    /**
     * Tandai reservasi sebagai telah dibayar.
     */
    public function bayar($id)
    {
        $reservasi = Reservation::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        if ($reservasi->payment_status === 'Pending' && $reservasi->booking_status !== 'Canceled') {
            $reservasi->update(['payment_status' => 'Paid']);
            return redirect()->back()->with('success', 'Pembayaran berhasil dilakukan.');
        }

        return redirect()->back()->with('error', 'Pembayaran tidak dapat diproses.');
    }
}
