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
        Schema::create('home_views', function (Blueprint $table) {
            $table->id();
            $table->string('title1section')->nullable();
            $table->string('titlebutton1section')->nullable();
            $table->string('urlbutton1section')->nullable();
            $table->string('description1section')->nullable();
            $table->string('subtitle1section')->nullable();
            $table->string('img1section')->nullable();

            $table->string('title2section')->nullable();
            $table->string('descripcion2section')->nullable();
            $table->string('titlebutton2section')->nullable();
            $table->string('urlbutton2section')->nullable();

            $table->string('title3section')->nullable();
            $table->string('descripcion3section')->nullable();
            $table->string('titlesecond3section')->nullable();
            $table->string('descripcionsecond3section')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_views');
    }
};
