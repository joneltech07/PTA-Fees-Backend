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
        Schema::create('s_y_fees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sy_id')->unsigned();
            $table->integer('fee_id')->unsigned();
            $table->timestamps();

            $table->foreign('sy_id')
                ->references('id')
                ->on('school_years');
            $table->foreign('fee_id')
                ->references('id')
                ->on('fees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_y_fees');
    }
};