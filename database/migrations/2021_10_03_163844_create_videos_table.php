<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('videos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->integer('author_id');
            $table->string('title', 75);
            $table->string('path');
            $table->string('code');
            $table->string('preview_path');
            $table->text('description')->nullable();
            $table->boolean('private')->default(false);
            $table->boolean('disabled_comments')->default(false);
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
        Schema::dropIfExists('videos');
    }
}
