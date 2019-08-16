<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('title')->nullable();					//publication title
			$table->string('author')->nullable();
			/* $table->date('published_date')->nullable();
			$table->string('type')->nullable();
			$table->string('journal')->nullable();
			$table->string('volume')->nullable();
			$table->string('link')->nullable(); */
			$table->bigInteger('status_id')->unsigned();
			$table->mediumText('description')->nullable();
			$table->bigInteger('user_id')->unsigned();	// so as to determine who wrote the entry
			$table->timestamp('published_at')->nullable();
            $table->timestamps();
			
			$table->foreign('status_id')
					->references('id')
					->on('research_project_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
