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
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->unsignedBigInteger('lineNo',true);
            // lineNo int
            $table->string('productName',100);
            $table->unsignedBigInteger('UnitNo');
            $table->decimal('price');
            $table->decimal('quantity');
            $table->decimal('total');
            $table->dateTime('expiryDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_details');
    }
};
