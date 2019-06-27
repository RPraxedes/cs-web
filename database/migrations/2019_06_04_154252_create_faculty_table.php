<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();
			$table->string('first_name')->nullable();
			$table->string('middle_name')->nullable();
			$table->string('last_name')->nullable();
			$table->mediumText('bio')->nullable();
			$table->string('position')->nullable();
			$table->string('degree')->nullable();
			$table->string('research_interest')->nullable();
			$table->bigInteger('status_id')->unsigned();
            $table->timestamps();
			
			$table->foreign('user_id')
					->references('id')
					->on('users');
			$table->foreign('status_id')
					->references('id')
					->on('faculty_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculty');
    }
}
