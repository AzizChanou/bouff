<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('phone')->nullable();
            $table->string('address');
            $table->string('comment')->default('Sans commentaire !');
            $table->unsignedFloat('total_amount');
            $table->boolean('status_payment')->default(false);
            $table->enum('status', ['Treatment', 'Preparation', 'Retrieve', 'Delivered'])->default('Treatment');
            $table->timestamps();

            $table->foreignUuid('user_id')->constrained();
            $table->foreignUuid('eatery_id')->constrained();
            $table->foreignUuid('deliverer_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
