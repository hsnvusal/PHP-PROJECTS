<?php namespace Vusal\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateVusalMovies extends Migration
{
    public function up()
    {
        Schema::create('vusal_movies_', function($table)
        {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('year')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('vusal_movies_');
    }
}
