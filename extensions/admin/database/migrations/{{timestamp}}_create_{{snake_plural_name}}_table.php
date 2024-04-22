<?php

namespace {{studly_author}}\{{studly_extension}}\Database\Migrations;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create{{studly_plural_name}}Table extends Migration
{
    public function up()
    {
        Schema::create('{{lower_author}}_{{lower_extension}}_{{snake_plural_name}}', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('{{lower_author}}_{{lower_extension}}_{{snake_plural_name}}');
    }
}
