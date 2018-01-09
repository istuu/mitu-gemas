<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateMenusClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('parent_id')->nullable();
            $table->string('lead', 100)->nullable();
            $table->string('title', 100);
            $table->string('permalink', 255);
            $table->string('external_link', 255)->nullable();
            $table->string('template', 100);
            $table->string('meta_title', 255);
            $table->string('meta_description', 2000)->nullable();
            $table->char('is_active', 1)->default(0)->nullable();
            $table->char('is_system', 1)->default(0)->nullable();
            $table->unsignedInteger('sequence');
            $table->datetime('create_on');
            $table->datetime('last_update')->nullable();

            $table->unique('permalink', 'permalink');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('menus');
    }
}