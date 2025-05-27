<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            $table->string('customer_name');
            $table->string('contact_info')->nullable();
            $table->date('check_in_date');
            $table->date('check_out_date');
            $table->integer('guests_count');
            $table->enum('room_type', ['Single', 'Double', 'Suite']);
            $table->string('room_number')->nullable(); // hanya admin bisa update
            $table->enum('payment_status', ['pending', 'paid', 'verified'])->default('pending');
            $table->enum('booking_status', ['pending', 'confirmed', 'checked-In', 'cancelled', 'completed'])->default('pending');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
