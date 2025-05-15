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

        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->text('detail');
            $table->string('type');
            $table->foreignId('category_id')->constrained();
            $table->foreignId('queue_id')->constrained();
            $table->foreignId('from_user')->constrained('users', 'id');
            $table->foreignId('technician_id')->constrained();
            $table->boolean('in_cronograma');
            $table->boolean('is_promediable');
            $table->timestamp('fecha_reg');
            $table->string('now_is');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
