<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('type_atributtes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        DB::table('type_atributtes')->insert([
            ['name' => 'select'],
            ['name' => 'text'],
            ['name' => 'color'],
            ['name' => 'image'],
        ]);
    
        DB::statement("ALTER TABLE type_atributtes ADD CONSTRAINT check_name_type CHECK (name IN ('select', 'text', 'color', 'image'))");

    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('type_atributtes');
    }
};
