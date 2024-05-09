<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rsvps', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('client_id');
            $table->string('event_id');
            $table->string('barcode_id');
            $table->string('feedback_id');
            $table->string('breakout_id');
            $table->string('room_id');
            $table->string('customer_name');
            $table->string('title');
            $table->string('email');
            $table->string('phone_number');
            $table->string('phone_office');
            $table->string('address_office');
            $table->string('city');
            $table->string('walk_in');
            $table->string('is_attend');
            $table->string('is_verified');
            $table->string('is_rejected');
            $table->string('row_status');
            $table->string('created_by');
            $table->string('updated_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rsvps');
    }
};
