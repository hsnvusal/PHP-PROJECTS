<?php namespace Vusal\Profile\Updates;

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class AddNewFields extends Migration
{
    public function up()
    {
        \Schema::table('users', function(Blueprint $table) {
                $table->string('facebook')->nullable();
                $table->text('bio')->nullable();
        });
    }

    public function down()
    {
        \Schema::dropIfExists('users');
    }
};
