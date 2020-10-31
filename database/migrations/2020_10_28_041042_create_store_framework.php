<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreFramework extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('name');
            $table->string('description');
            $table->string('catagory');
            $table->integer('price');
            $table->integer('units');
        });

        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->string('product_image_path');
            $table->string('caption')->nullable();

            $table->timestamps();

            $table->foreignId('product_id')
                ->references('id')
                ->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_images');
        Schema::dropIfExists('projects');
    }
}
