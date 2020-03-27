<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMarketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('markets', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable();
			$table->integer('market_type')->nullable();
			$table->string('market_name', 111)->nullable();
			$table->string('market_owner', 111)->nullable();
			$table->string('owner_email', 111)->nullable();
			$table->string('owner_phone', 112)->nullable();
			$table->text('owner_address', 65535)->nullable();
			$table->string('contact_person_name', 111)->nullable();
			$table->string('contact_person_phone', 111)->nullable();
			$table->string('contact_person_email', 191)->nullable();
			$table->text('other', 65535)->nullable();
			$table->text('audio', 65535)->nullable();
			$table->text('pdf', 65535)->nullable();
			$table->text('notes', 65535)->nullable();
			$table->string('lat')->nullable();
			$table->string('lng')->nullable();
			$table->timestamps();
			$table->string('status', 222)->nullable()->default('incomplete');
			$table->string('img', 222)->nullable();
			$table->string('color', 222)->nullable();
			$table->integer('item_quantity')->nullable();
			$table->float('total_amount', 10, 0)->nullable();
			$table->float('item_amount', 10, 0)->nullable();
			$table->string('plz', 222)->default('');
			$table->boolean('display')->nullable();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('markets');
	}

}
