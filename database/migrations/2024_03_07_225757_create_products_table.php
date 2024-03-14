<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB'; 

            $table->bigIncrements('id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('status_property_id');
            $table->unsignedBigInteger('image_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable(); 
            $table->string('name',191);
            $table->integer('rooms');
            $table->integer('garage');
            $table->integer('square_meters');
            $table->integer('bathrooms');
            $table->decimal('price', 10, 2);
        
            $table->text('description')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();

            // Foreign keys
            $table->foreign('image_id')->references('id')->on('images_product');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('status_property_id')->references('id')->on('status_property');
            $table->foreign('district_id')->references('id')->on('districts');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
