<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUseroffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('useroffers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->text('o_detail');
            $table->string('o_tag1');
            $table->string('o_tag2');
            $table->string('o_tag3');
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
        Schema::drop('useroffers');
    }
}
