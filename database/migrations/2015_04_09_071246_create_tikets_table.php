<?php

	use Illuminate\Database\Migrations\Migration;
	use Illuminate\Database\Schema\Blueprint;

	class CreateTiketsTable extends Migration
	{

		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('tikets', function (Blueprint $table) {
				$table->increments('id');
				$table->integer('user_id');
				$table->integer('tikets_id');
				$table->string('title')->nullable();
				$table->text('message');
				$table->boolean('complete')->default(FALSE);
				$table->timestamps();
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
			Schema::drop('tikets');
		}

	}
