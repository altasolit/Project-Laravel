<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function showPayment($id)
        {
            $reservation = Reservation::findOrFail($id);
            return view('customer.pembayaran', compact('reservation'));
        }

        public function processPayment(Request $request, $id)
        {
            $reservation = Reservation::findOrFail($id);
            $reservation->status_pembayaran = 'Paid'; // simulasi bayar
            $reservation->save();

            return redirect()->route('customer.profile')->with('success', 'Pembayaran berhasil!');
        }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }
}
