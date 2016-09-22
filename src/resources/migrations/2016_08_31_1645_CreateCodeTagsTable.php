<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodeTagsTable extends Migration
{

    public function up()
    {
       Schema::create('eduardobcolombo_tags', function(Blueprint $table) {
           $table->increments('id');
           $table->string('name');
           $table->timestamp('timestamp');
       });
    }

    public function down()
    {
        Schema::drop('eduardobcolombo_tags');
    }
}