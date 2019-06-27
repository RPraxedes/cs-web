<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('title');					//publication title
			$table->bigInteger('user_id')->unsigned();	//publication author
			$table->string('month');					//publication month
			$table->string('year');						//publication year
            $table->timestamps();
			
			$table->foreign('user_id')
					->references('id')
					->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
