<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreatePrizeTablesClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prize_tables', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('type', 100);
            $table->string('prize', 100);
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
        Schema::drop('prize_tables');
    }
}