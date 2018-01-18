<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnStatusInExchangeCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exchange_codes', function (Blueprint $table) {
            $table->string('status')->after('browser');
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
            $table->dropColumn('status');
        });
    }
}
