<?php namespace Vusal\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVusalMoviesMoviesGenres extends Migration
{
    public function up()
    {
        Schema::create('vusal_movies_movies_genres', function($table)
        {
            $table->integer('movie_id');
            $table->integer('genre_id');
            $table->primary(['movie_id','genre_id']);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vusal_movies_movies_genres');
    }
}
