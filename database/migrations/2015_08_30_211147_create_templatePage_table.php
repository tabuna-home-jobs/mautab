<?php

	use Illuminate\Database\Migrations\Migration;

	class CreateTemplatePageTable extends Migration
	{
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema::table('pages', function ($table) {
				$table->string('template');
			});
		}

		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
			Schema::table('pages', function ($table) {
				$table->dropColumn('template');
			});
		}
	}
