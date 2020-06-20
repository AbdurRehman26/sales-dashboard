<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableAddColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('p_front')->nullable();
            $table->string('p_back')->nullable();
            $table->string('g_front')->nullable();
            $table->string('g_back')->nullable();
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('p_front');
            $table->dropColumn('p_back');
            $table->dropColumn('g_front');
            $table->dropColumn('g_back');

        });
    }
}
