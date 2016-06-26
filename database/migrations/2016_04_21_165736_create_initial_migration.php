<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialMigration extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('balances', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('name');
			$table->string('description');
			$table->timestamps();
			$table->foreign('user_id')->references('id')->on('users');
		});

		Schema::create('scale', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100);
		});


		DB::table('scale')->insert([
			[
				'id' => '1',
				'name' => 'Monthly'
			],
			[
				'id' => '2',
				'name' => 'Weekly'
			],
			[
				'id' => '3',
				'name' => 'Bi Weekly'
			],
		]);

		// Schema::create('projections', function (Blueprint $table) {
		// 	$table->increments('id');
		// 	$table->string('name', 100);
		// });

		// Schema::create('deposits', function (Blueprint $table) {
		// 	$table->increments('id');
		// 	$table->integer('projection_id')->unsigned();
		// 	$table->integer('user_id')->unsigned();
		// 	$table->decimal('deposit_amount', 10, 2);
		// 	$table->integer('scale_id')->unsigned();
		// 	// can be day of month, day of week or full date
		// 	$table->string('deposit_date', 50);
		// 	$table->boolean('reoccuring')->default(0);
		// 	$table->timestamps();
		// 	$table->foreign('projection_id')->references('id')->on('projections');
		// 	$table->foreign('user_id')->references('id')->on('users');
		// 	$table->foreign('scale_id')->references('id')->on('scale');
		// });

		Schema::create('account_activity', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('balance_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->decimal('amount', 10, 2);
			$table->string('name', 50);
			$table->integer('scale_id')->unsigned();
			$table->string('date', 50);
			$table->boolean('reoccuring')->default(0);
			$table->boolean('withdrawl')->default(0);
			$table->timestamps();
			$table->foreign('balance_id')->references('id')->on('balances');
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('scale_id')->references('id')->on('scale');
		});

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// Schema::drop('deposits');
		
		Schema::drop('balances');
		Schema::drop('account_activity');
		//Schema::drop('projections');
		Schema::drop('scale');
	}
}
