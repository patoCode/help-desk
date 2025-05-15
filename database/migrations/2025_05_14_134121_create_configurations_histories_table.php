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

        Schema::create('configurations_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('config_old')->constrained('configurations', 'id');
            $table->text('json_old');
            $table->text('json_new');
            $table->string('user_reg');
            $table->timestamp('fecha_reg');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('configurations_histories');
    }
};
