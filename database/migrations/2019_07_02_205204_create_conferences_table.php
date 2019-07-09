<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('paper_title')->nullable();
			$table->string('author')->nullable();
			$table->date('conference_date')->nullable();
			$table->string('type')->nullable();
			$table->string('venue')->nullable();
			$table->string('conference_title')->nullable();
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
        Schema::dropIfExists('conferences');
    }
}
