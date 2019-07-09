<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOtherachievementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otherachievements', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->mediumText('content')->nullable();
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
        Schema::dropIfExists('otherachievements');
    }
}
