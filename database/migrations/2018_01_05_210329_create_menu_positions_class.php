<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateMenuPositionsClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_positions', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('menu_id')->nullable();
            $table->string('position', 25);
            $table->datetime('create_on');

            $table->unique(['menu_id', 'position'], 'menu_id-position');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menu_positions');
    }
}