<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserequiresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userequires', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('r_detail');
            $table->string('r_tag1');
            $table->string('r_tag2');
            $table->string('r_tag3');
            $table->integer('user_id'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('userequires');
    }
}
