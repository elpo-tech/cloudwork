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
        Schema::create('transdbs', function (Blueprint $table) {
            $table->id();
            $table->longText('ref')->nullable();
            $table->string('user')->nullable();
            $table->string('uid')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('type')->default('depo');
            $table->string('status')->default('0');
            $table->float('amnt', 18, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transdbs');
    }
};
