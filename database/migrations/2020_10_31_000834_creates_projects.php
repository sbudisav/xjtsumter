<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatesProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
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

            $table->foreignId('project_id')
                ->references('id')
                ->on('projects');
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
        Schema::dropIfExists('project');
    }
}
