<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateNotificationsClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('type', 100);
            $table->string('title', 100);
            $table->text('description')->nullable();
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
        Schema::drop('notifications');
    }
}