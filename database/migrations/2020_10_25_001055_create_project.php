<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProject extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('description');
            $table->text('catagory');
        });

        Schema::create('project_images', function (Blueprint $table) {
            $table->id();
            $table->string('post_image_path');
            $table->string('caption')->nullable();

            $table->timestamps();

            $table->foreignId('post_id')
                ->references('id')
                ->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project');
    }
}
