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

        Schema::create('queues', function (Blueprint $table) {
            $table->id();
            $table->integer('last_assign');
            $table->integer('technician_counter');
            $table->boolean('is_cronogramable');
            $table->boolean('is_promediable');
            $table->string('priority');
            $table->string('status')->default('active');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('queues');
    }
};
