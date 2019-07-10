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
			$table->string('position')->nullable();
			$table->string('bs_degree')->nullable();
			$table->string('ms_degree')->nullable();
			$table->string('phd_degree')->nullable();
			$table->string('research_interest')->nullable();
			$table->string('contact_info')->nullable();
			$table->string('profile_image')->nullable();
			$table->string('profile_alt')->nullable();		//for profile image
			$table->bigInteger('dept_id')->unsigned();
			$table->bigInteger('status_id')->unsigned();
			$table->timestamp('published_at')->nullable();
            $table->timestamps();
			
			$table->foreign('user_id')
					->references('id')
					->on('users');
			$table->foreign('dept_id')
					->references('id')
					->on('departments');
			$table->foreign('status_id')
					->references('status_id')
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
