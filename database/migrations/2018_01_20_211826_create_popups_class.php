<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreatePopupsClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('popups', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('image', 100);
            $table->char('is_active', 1)->default(1)->nullable();
            $table->datetime('create_on');
            $table->datetime('last_update')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('popups');
    }
}