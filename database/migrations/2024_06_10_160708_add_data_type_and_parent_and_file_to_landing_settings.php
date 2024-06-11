<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('landing_settings', function (Blueprint $table) {
            $table->string('data_type')->default('text');
            $table->unsignedBigInteger('parent')->nullable();

            $table->foreign('parent')->references('id')->on('landing_settings')
                ->nullOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('landing_settings', function (Blueprint $table) {
            $table->dropColumn('data_type');
            // $table->dropColumn('parent');
        });
    }
};
