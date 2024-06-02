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
        Schema::create('microcategories', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('subcategory_id')->nullable();

            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('description')->nullable();
            $table->string('url_image')->nullable();
            $table->string('name_image')->nullable();

            $table->boolean('destacar')->default(false);
            $table->boolean('visible')->default(true);
            $table->boolean('status')->default(true);

            $table->timestamps();

            $table->foreign('subcategory_id')->references('id')->on('subcategories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('microcategories');
    }
};
