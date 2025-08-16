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
        Schema::create('accdbs', function (Blueprint $table) {
            $table->id();
            $table->string('uid')->nullable();
            $table->string('user')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('country')->nullable();
            $table->float('earn', 18, 2)->default('0');
            $table->float('bal', 18, 2)->default('0');
            $table->float('with', 18, 2)->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accdbs');
    }
};
