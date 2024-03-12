<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeInteresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('me_interesa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_puja_id');
            $table->unsignedBigInteger('product_id');
            $table->boolean('status')->default(1);
            $table->foreign('user_puja_id')->references('id')->on('users_puja');
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
        Schema::dropIfExists('me_interesa');
    }
}
