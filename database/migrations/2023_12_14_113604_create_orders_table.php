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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId("restaurant_id")->constrained();
            $table->foreignId("user_id")->constrained();
            $table->string("customer_address")->nullable();
            $table->string("time_delivery")->nullable();
            $table->boolean("confirm")->defaut("false");
            $table->boolean("place_delivery");
            $table->string("proof_path")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
