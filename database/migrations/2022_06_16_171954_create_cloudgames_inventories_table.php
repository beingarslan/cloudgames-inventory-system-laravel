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
        Schema::create('cloudgames_inventories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_package')->nullable()->constrained('cloudgames_packages')->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('online')->nullable();
            $table->boolean('busy')->nullable();
            $table->bigInteger('score')->nullable();
            $table->string('api_port')->nullable();
            $table->string('video_port')->nullable();
            $table->string('audio_port')->nullable();
            $table->string('input_port')->nullable();
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
        Schema::dropIfExists('cloudgames_inventories');
    }
};
