<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateAdminPasswordResetsClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_password_resets', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('admin_id')->nullable();
            $table->string('token', 255);
            $table->datetime('expiration');
            $table->datetime('create_on');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admin_password_resets');
    }
}