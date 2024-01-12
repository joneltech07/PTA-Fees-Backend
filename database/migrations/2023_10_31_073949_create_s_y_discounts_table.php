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
        Schema::create('s_y_discounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sy_id')->unsigned();
            $table->integer('discount_id')->unsigned();
            $table->timestamps();

            $table->foreign('sy_id')
                ->references('id')
                ->on('school_years');
            $table->foreign('discount_id')
                ->references('id')
                ->on('discounts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('s_y_discounts');
    }
};