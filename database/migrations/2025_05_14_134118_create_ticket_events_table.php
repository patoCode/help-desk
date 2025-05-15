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
        Schema::disableForeignKeyConstraints();

        Schema::create('ticket_events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ticket_id')->constrained();
            $table->string('event');
            $table->string('in_status');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('queue_id')->constrained();
            $table->foreignId('technician_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->boolean('in_cronograma');
            $table->boolean('is_promediable');
            $table->timestamp('fecha_reg');
            $table->string('user_reg');
            $table->string('status');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket_events');
    }
};
