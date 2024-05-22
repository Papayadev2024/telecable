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
        Schema::create('addres_orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('departamento_id')->nullable();
            $table->unsignedBigInteger('provincia_id')->nullable();
            $table->unsignedBigInteger('distrito_id')->nullable();
            $table->string('dir_av_calle')->nullable();
            $table->string('dir_numero')->nullable();
            $table->string('dir_bloq_lote')->nullable();
            $table->string('imagen')->nullable();
            
            $table->unsignedBigInteger('user_id')->nullable();
            $table->boolean('favorite')->default(false)->nullable();

            $table->foreign('user_id')->references('id')->on('user_details')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addres_orders');
    }
};
