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
        

        Schema::table('users', function (Blueprint $table) {
            $table->integer('role')->default(0);
            $table->string('identifier')->unique()->nullable();
            $table->foreignId('major_id')->constrained('majors');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
