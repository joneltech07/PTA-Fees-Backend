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
        Schema::create('payed_students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('or_id');
            $table->string('lrn_id');
            $table->integer('sy_fee_id')->unsigned();
            $table->integer('sy_discount_id')->unsigned();
            $table->timestamps();

            $table->foreign('or_id')->references('OR')->on('payment_records')->primary('OR');
            $table->foreign('lrn_id')->references('LRN')->on('students')->primary('LRN');
            $table->foreign('sy_fee_id')->references('id')->on('s_y_fees');
            $table->foreign('sy_discount_id')->references('id')->on('s_y_discounts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payed_students');
    }
};