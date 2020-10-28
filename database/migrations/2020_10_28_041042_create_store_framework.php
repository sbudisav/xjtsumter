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
        Schema::create('product', function (Blueprint $table) {
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
                ->on('product');
        });

        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('address');
            $table->string('confirmation_code');
            $table->string('status');

            $table->foreignId('user_id')
                ->references('id')
                ->on('users');

            $table->foreignId('product_id')
                ->references('id')
                ->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('store_framework');
    }
}
