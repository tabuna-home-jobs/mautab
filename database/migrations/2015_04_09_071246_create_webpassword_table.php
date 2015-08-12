<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebPasswordTable extends Migration
	{

		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::create('webpassword', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('user_id');
                $table->text('url');
                $table->longText('login');
                $table->mediumText('comment');
                $table->text('category');
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
			Schema::drop('webpassword');
		}

	}
