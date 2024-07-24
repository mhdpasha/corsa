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
        Schema::create('incoming_requests', function (Blueprint $table) {
            $table->id();
            $table->enum('status', ['new', 'accepted', 'assigned', 'cleared'])->nullable();
            $table->enum('type', ['FIRE','Housekeeping', 'Maintenance', 'Concierge', 'Room Service', 'Lost and Found']);
            $table->string('title');
            $table->string('location');
            $table->string('description');
            $table->text('picture')->nullable();
            $table->foreignid('requestor_id')->constrained('users')->nullable();
            $table->foreignId('receiver_id')->constrained('users')->nullable();
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incoming_requests');
    }
};
