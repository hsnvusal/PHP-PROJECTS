<?php namespace Vusal\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVusalMovies extends Migration
{
    public function up()
    {
        Schema::table('vusal_movies_', function($table)
        {
            $table->text('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('vusal_movies_', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
