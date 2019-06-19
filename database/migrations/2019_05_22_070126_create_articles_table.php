<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('title');
			$table->bigInteger('user_id')->unsigned();
			$table->mediumText('body');
			$table->text('header_image')->nullable();
			$table->text('header_alt')->nullable();
			$table->string('type');	// different from category (news, research, publication)
			$table->timestamp('published_at')->nullable();
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
        Schema::dropIfExists('articles');
    }
}
