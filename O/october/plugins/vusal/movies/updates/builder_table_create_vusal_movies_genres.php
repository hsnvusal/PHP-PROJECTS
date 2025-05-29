<?php namespace Vusal\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVusalMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('vusal_movies_genres', function($table)
        {
            $table->increments('id');
            $table->string('genre_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vusal_movies_genres');
    }
}
