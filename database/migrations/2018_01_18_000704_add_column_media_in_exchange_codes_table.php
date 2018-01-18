<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnMediaInExchangeCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exchange_codes', function (Blueprint $table) {
            $table->string('media')->after('gender');
            $table->string('browser')->after('media');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exchange_codes', function (Blueprint $table) {
            $table->dropColumn(['media','browser']);
        });
    }
}
