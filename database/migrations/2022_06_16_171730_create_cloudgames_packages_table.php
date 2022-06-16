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
        Schema::create('cloudgames_packages', function (Blueprint $table) {
            $table->id();
            $table->string('brand')->nullable();
            $table->string('name')->nullable();
            $table->bigInteger('id_game')->nullable();
            $table->json('games')->nullable();
            $table->integer('screens')->nullable();
            $table->string('resolution')->nullable();
            $table->string('aspect_ratio')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cloudgames_packages');
    }
};
