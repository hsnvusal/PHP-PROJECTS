<?php namespace Vusal\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVusalMoviesActors extends Migration
{
    public function up()
    {
        Schema::create('vusal_movies_actors', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vusal_movies_actors');
    }
}
