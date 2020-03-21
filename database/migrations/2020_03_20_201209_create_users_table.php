<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191);
			$table->string('email', 191)->unique();
			$table->string('phone_number', 191)->nullable();
			$table->text('fcm_id', 65535)->nullable();
			$table->string('password', 191);
			$table->string('remember_token', 100)->nullable();
			$table->timestamps();
			$table->string('is_verified', 22)->default('no');
			$table->integer('user_type')->default(0);
			$table->string('plz', 222)->nullable();
			$table->string('st_house', 222)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
