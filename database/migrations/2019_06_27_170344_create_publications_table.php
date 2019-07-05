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
			$table->string('author');
			$table->date('published_date');
			$table->string('type');
			$table->string('journal');
			$table->string('volume');
			$table->string('link');
			$table->bigInteger('user_id')->unsigned();	// so as to determine who wrote the entry
			$table->timestamp('published_at')->nullable();
            $table->timestamps();
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
