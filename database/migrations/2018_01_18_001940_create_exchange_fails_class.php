<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateExchangeFailsClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchange_fails', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('voucher_id')->nullable();
            $table->string('name', 100);
            $table->string('email', 100);
            $table->string('phone', 100);
            $table->string('id_card', 100);
            $table->string('province_id', 100);
            $table->string('city_id', 100);
            $table->string('gender', 100);
            $table->string('media', 100);
            $table->string('browser', 100);
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
        Schema::drop('exchange_fails');
    }
}