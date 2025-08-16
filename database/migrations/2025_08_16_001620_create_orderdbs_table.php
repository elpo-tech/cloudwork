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
        Schema::create('orderdbs', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->longText('title')->nullable();
            $table->float('pay', 18, 2)->nullable();
            $table->string('dead')->nullable();
            $table->longText('descr')->nullable();
            $table->longText('rqmnt')->nullable();
            $table->longText('instruct')->nullable();;
            $table->integer('status')->default('0');
            $table->integer('pro')->default('0');
            $table->string('user')->nullable();
            $table->string('mode')->nullable();;
            $table->string('done')->nullable();;
            $table->string('com')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderdbs');
    }
};
