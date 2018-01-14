<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreatePromoStepsClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo_steps', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('image', 100);
            $table->string('description', 255);
            $table->unsignedInteger('sequence');
            $table->char('is_active', 1)->default(0)->nullable();
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
        Schema::drop('promo_steps');
    }
}