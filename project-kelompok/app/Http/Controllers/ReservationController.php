<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // Tampilkan form reservasi
    public function create()
    {
        // Daftar tipe kamar enum sesuai migration
        $roomTypes = ['Single', 'Double', 'Suite'];

        return view('reservations.create', compact('roomTypes'));
    }

    // Simpan data reservasi
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'contact_info' => 'nullable|string|max:255',
            'check_in_date' => 'required|date|after_or_equal:today',
            'check_out_date' => 'required|date|after:check_in_date',
            'guests_count' => 'required|integer|min:1',
            'room_type' => 'required|in:Single,Double,Suite',
        ]);

        Reservation::create($request->all());

        return redirect()->route('reservations.create')->with('success', 'Reservation created successfully!');
    }

    // List semua reservasi (CRUD index)
    public function index()
    {
        $reservations = Reservation::latest()->paginate(10);
        return view('reservations.index', compact('reservations'));
    }

    // Tampilkan detail reservasi
    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservations.show', compact('reservation'));
    }

    // Form edit reservasi
    public function edit($id)
    {
        $reservation = Reservation::findOrFail($id);
        $roomTypes = ['Single', 'Double', 'Suite'];

        return view('reservations.edit', compact('reservation', 'roomTypes'));
    }

    // Update reservasi
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required|string|max:255',
            'contact_info' => 'nullable|string|max:255',
            'check_in_date' => 'required|date|after_or_equal:today',
            'check_out_date' => 'required|date|after:check_in_date',
            'guests_count' => 'required|integer|min:1',
            'room_type' => 'required|in:Single,Double,Suite',
            'room_number' => 'nullable|string|max:255',
            'payment_status' => 'required|in:pending,paid,verified',
            'booking_status' => 'required|in:pending,checked-in,completed,cancelled',
        ]);

        $reservation = Reservation::findOrFail($id);
        $reservation->update($validatedData);

        return redirect()->route('reservations.index')->with('success', 'Reservation updated successfully!');
    }

    // Hapus reservasi
    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('reservations.index')->with('success', 'Reservation deleted successfully!');
    }
}
