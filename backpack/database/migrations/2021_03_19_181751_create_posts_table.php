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
            $table->string('city_name', 50);
            $table->unsignedTinyInteger('price_life');
            $table->unsignedTinyInteger('internet_good');
            $table->unsignedTinyInteger('city_save');
            $table->string('language', 50);
            $table->unsignedTinyInteger('apartment_easy');
            $table->unsignedTinyInteger('amusement');
            $table->string('country', 50);
            $table->string('continent', 50);        
            $table->text('description', 2000);
            $table->string('image_city', 50);        
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
