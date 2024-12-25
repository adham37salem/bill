<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('meters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id');
            $table->string('ip_address');
            $table->date('last_reading_date');
            $table->date('newest_reading_date');
            $table->bigInteger('units');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('meters');
    }
};
