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
			$table->string('title')->nullable();					//publication title
			$table->string('author')->nullable();
			$table->date('published_date')->nullable();
			$table->string('type')->nullable();
			$table->string('journal')->nullable();
			$table->string('volume')->nullable();
			$table->string('link')->nullable();
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
