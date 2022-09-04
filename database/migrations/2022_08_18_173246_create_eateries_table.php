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
        Schema::create('eateries', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('label');
            $table->string('ifu');
            $table->string('rccm');
            $table->string('picture_path')->default("/storage/eatery/eatery.png");
            $table->string('logo_path')->nullable();
            $table->boolean('status')->default(true);
            $table->string('description')->nullable();
            $table->time('open_hour')->nullable();
            $table->time('closed_hour')->nullable();
            $table->integer('cookingtime')->nullable();
            $table->timestamps();

            $table->foreignUuid('user_id')->nullable()->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eateries');
    }
};
