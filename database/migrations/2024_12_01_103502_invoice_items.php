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
        Schema::create('invoiceItems', function (Blueprint $table) {
            $table->id();
            $table->string('items');
            $table->string('item_description');
            $table->string('qty');
            $table->string('price');
            $table->string('discount');
            $table->string('netprice');
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
