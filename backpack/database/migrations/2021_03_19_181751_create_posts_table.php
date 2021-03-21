<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('cityname', 45);
            $table->unsignedTinyInteger('price-life');
            $table->unsignedTinyInteger('internet-good');
            $table->unsignedTinyInteger('city-save');
            $table->string('language', 45);
            $table->unsignedTinyInteger('apartment-easy');
            $table->unsignedTinyInteger('distraction');
            $table->string('country', 45);
            $table->string('continent', 45);
        //    $table->unsignedTinyInteger('idcomment');
            $table->string('description', 45);
            $table->string('photo', 45);
        //    $table->unsignedTinyInteger('idlike');
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
        Schema::dropIfExists('posts');
    }
}
