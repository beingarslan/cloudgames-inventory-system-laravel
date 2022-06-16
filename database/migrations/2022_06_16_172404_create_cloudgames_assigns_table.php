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
        Schema::create('cloudgames_assigns', function (Blueprint $table) {
            $table->id();
            $table->string('family')->nullable();
            $table->bigInteger('id_operator')->nullable();
            $table->foreignId('id_package')->nullable()->constrained('cloudgames_inventories')->onUpdate('cascade')->onDelete('cascade')->comment('id of cloudgame in cloudgames_inventory');
            $table->unsignedBigInteger('id_shop')->nullable()->comment('id of show the cloudgames is assigned to');
            $table->unsignedBigInteger('id_user')->nullable()->comment('id of user (player) in users table');
            $table->boolean('locked')->nullable()->default(false)->comment('if cloudgame is locked to user');
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
        Schema::dropIfExists('cloudgames_assigns');
    }
};
