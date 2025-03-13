<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::with('room', 'user')->get();
        return view('reservations.index', compact('reservations'));
    }

    public function create()
    {
        $rooms = Room::where('status', 'Tersedia')->get();
        return view('reservations.create', compact('rooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required|exists:rooms,id',
            'check_in' => 'required|date|after:today',
            'check_out' => 'required|date|after:check_in',
            'guests' => 'required|integer|min:1',
        ]);

        $room = Room::findOrFail($request->room_id);
        if ($room->status != 'Tersedia') {
            return back()->with('error', 'Kamar tidak tersedia untuk reservasi');
        }

        // Hitung total harga berdasarkan lama menginap
        $checkIn = Carbon::parse($request->check_in);
        $checkOut = Carbon::parse($request->check_out);
        $days = $checkIn->diffInDays($checkOut);
        $totalPrice = $room->price_per_night * $days;

        Reservation::create([
            'user_id' => Auth::id(),
            'room_id' => $request->room_id,
            'check_in' => $request->check_in,
            'check_out' => $request->check_out,
            'guests' => $request->guests,
            'booking_status' => 'Pending',
            'payment_status' => 'Pending',
            'total_price' => $totalPrice,
        ]);

        return redirect()->route('reservations.index')->with('success', 'Reservasi berhasil dibuat');
    }

    public function edit(Reservation $reservation)
    {
        return view('reservations.edit', compact('reservation'));
    }

    public function update(Request $request, Reservation $reservation)
    {
        $request->validate([
            'booking_status' => 'required|in:Pending,Confirmed,Checked-In,Canceled,Completed',
            'payment_status' => 'required|in:Pending,Paid,Verified',
        ]);

        $reservation->update([
            'booking_status' => $request->booking_status,
            'payment_status' => $request->payment_status,
        ]);

        return redirect()->route('reservations.index')->with('success', 'Status reservasi diperbarui');
    }

    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return redirect()->route('reservations.index')->with('success', 'Reservasi berhasil dihapus');
    }
}
