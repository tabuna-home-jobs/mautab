<?php

	use Illuminate\Database\Migrations\Migration;
	use Illuminate\Database\Schema\Blueprint;

	class CreateUsersTable extends Migration
	{

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
			$table->string('nickname')->unique();
			$table->string('name');
			$table->string('lastname');
			$table->string('email')->unique();
			$table->string('lang')->default('en');
			$table->integer('id');
			$table->timestamp('EndOfService');
			$table->string('IpServer')->default('151.80.164.81');
			$table->double('float')->default('0.00');
			$table->string('role')->default('user');
			$table->string('password', 60);
			$table->rememberToken();
			$table->timestamps();
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
