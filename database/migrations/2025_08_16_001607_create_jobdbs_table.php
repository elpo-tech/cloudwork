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
        Schema::create('jobdbs', function (Blueprint $table) {
            $table->id();
            $table->string('oid')->nullable();
            $table->longText('code')->nullable();
            $table->longText('title')->nullable();
            $table->string('pay')->nullable();
            $table->longText('descr')->nullable();
            $table->string('dead')->nullable();
            $table->longText('proof')->nullable();
            $table->longText('instruct')->nullable();
            $table->string('status')->nullable();
            $table->string('user')->nullable();
            $table->string('pro')->nullable();
            $table->string('mode')->nullable();
            $table->string('done')->default('1');
            $table->string('com')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobdbs');
    }
};
