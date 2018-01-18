<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableVouchers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('vouchers', function (Blueprint $table) {
            $table->dropColumn('prize_id');
            $table->string('type')->after('id');
            $table->string('prize')->after('unique_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('vouchers', function (Blueprint $table) {
            $table->inte('prize_id')->after('id');
            $table->dropColumn(['type','prize']);
        });
    }
}
