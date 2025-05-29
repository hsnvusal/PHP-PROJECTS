<?php namespace Vusal\Movies\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateVusalMovies2 extends Migration
{
    public function up()
    {
        Schema::table('vusal_movies_', function($table)
        {
            $table->text('actors')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('vusal_movies_', function($table)
        {
            $table->dropColumn('actors');
        });
    }
}
