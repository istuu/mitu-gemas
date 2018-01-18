<?php 

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateEmailTemplatesClass extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('email_templates', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('type', 100);
            $table->string('from_email', 100);
            $table->string('from_name', 100);
            $table->string('subject', 100);
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
        Schema::drop('email_templates');
    }
}