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
        Schema::create('contact_details', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->string('area')->nullable();
            $table->string('nombre')->nullable();
            $table->string('celular')->nullable();
            $table->string('email')->nullable();

            $table->boolean('visible')->default(true);
            $table->boolean('status')->default(true);

            $table->foreign('categoria_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_details');
    }
};
