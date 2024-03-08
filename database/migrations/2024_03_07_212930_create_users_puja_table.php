<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersPujaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_puja', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('name', 191);
            $table->string('email', 191)->unique();
            $table->string('password');
            $table->date('birthdate')->nullable();
            $table->string('document')->nullable();
            $table->string('type_document')->nullable();
            $table->boolean('status')->default(1);
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
        Schema::dropIfExists('users_puja');
    }
}
