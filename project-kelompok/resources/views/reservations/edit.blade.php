<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Reservasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4fa;
        }
        .card {
            border-radius: 15px;
        }
        .form-control, .form-select {
            border-radius: 10px;
        }
        .card-header {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow border-0">
                <div class="card-header bg-primary text-white text-center">
                    <h4 class="mb-0">Edit Reservation</h4>
                </div>

                <div class="card-body bg-light">

                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="customer_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="customer_name" name="customer_name" value="{{ old('customer_name', $reservation->customer_name) }}" required>
                            @error('customer_name') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="contact_info" class="form-label">Contact</label>
                            <input type="text" class="form-control" id="contact_info" name="contact_info" value="{{ old('contact_info', $reservation->contact_info) }}">
                            @error('contact_info') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="check_in_date" class="form-label">Check-in</label>
                                <input type="date" class="form-control" id="check_in_date" name="check_in_date" value="{{ old('check_in_date', \Carbon\Carbon::parse($reservation->check_in_date)->format('Y-m-d')) }}" required>
                                @error('check_in_date') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="check_out_date" class="form-label">Check-out</label>
                                <input type="date" class="form-control" id="check_out_date" name="check_out_date" value="{{ old('check_out_date', \Carbon\Carbon::parse($reservation->check_out_date)->format('Y-m-d')) }}" required>
                                @error('check_out_date') <small class="text-danger">{{ $message }}</small> @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="guests_count" class="form-label">Guest Count</label>
                            <input type="number" class="form-control" min="1" id="guests_count" name="guests_count" value="{{ old('guests_count', $reservation->guests_count) }}" required>
                            @error('guests_count') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="room_type" class="form-label">Room Type</label>
                            <select class="form-select" id="room_type" name="room_type" required>
                                @foreach ($roomTypes as $type)
                                    <option value="{{ $type }}" @if(old('room_type', $reservation->room_type) == $type) selected @endif>{{ $type }}</option>
                                @endforeach
                            </select>
                            @error('room_type') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="room_number" class="form-label">Room Number</label>
                            <input type="text" class="form-control" id="room_number" name="room_number" value="{{ old('room_number', $reservation->room_number) }}">
                            @error('room_number') <small class="text-danger">{{ $message }}</small> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="payment_status" class="form-label">Payment Status</label>
                            <select class="form-select" name="payment_status" required>
                                <option value="pending" {{ old('payment_status', $reservation->payment_status) == 'pending' ? 'selected' : '' }}>Pending</option>
                                <option value="paid" {{ old('payment_status', $reservation->payment_status) == 'paid' ? 'selected' : '' }}>Paid</option>
                            </select>
                            @error('payment_status')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="booking_status" class="form-label">Booking Status</label>
                            <select class="form-select" name="booking_status" required>
                                <option value="booked" {{ old('booking_status', $reservation->booking_status) == 'pending' ? 'selected' : '' }}>Booked</option>
                                <option value="checked-in" {{ old('booking_status', $reservation->booking_status) == 'checked-in' ? 'selected' : '' }}>Checked-in</option>
                                <option value="completed" {{ old('booking_status', $reservation->booking_status) == 'completed' ? 'selected' : '' }}>Completed</option>
                                <option value="cancelled" {{ old('booking_status', $reservation->booking_status) == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                            </select>
                            @error('booking_status')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg">Save Changes</button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
