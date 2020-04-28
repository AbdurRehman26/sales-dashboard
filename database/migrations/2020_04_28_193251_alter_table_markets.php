<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableMarkets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('markets', function (Blueprint $table) {
            //
            $table->boolean('is_expiry')->nullable();
            $table->timestamp('expiry_date')->nullable();
            $table->tinyInteger('num_of_times_expired')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('markets', function (Blueprint $table) {
            //
            $table->dropColumn('is_expiry');
            $table->dropColumn('expiry_date');
            $table->dropColumn('num_of_times_expired');
        });
    }
}
