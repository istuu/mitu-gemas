<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateSocialsClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socials', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title', 100);
            $table->string('icon', 100);
            $table->string('permalink', 255);
            $table->unsignedInteger('sequence');
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
        Schema::drop('socials');
    }
}