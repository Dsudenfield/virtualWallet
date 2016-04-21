<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email')->unique();
			$table->string('password');
			$table->rememberToken();
			$table->timestamps();
		});

		DB::table('users')->insert([
			'first_name' => 'Dan',
			'last_name' => 'Sudenfield',
			'email' => 'dsudenfield@gmail.com',
			'password' => '$2y$10$58f/DF/8CUTNeKQH6fbpruoBSpjhpkB.7DWNFusBOsuhQRRQbVhce',
			'remember_token' => 'CHdAbg6wxiOhoqStJ2rkQsm5nZIfLNTwQByt15TXRInOWy4k7oF1DTWS03bm',
		]);
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
