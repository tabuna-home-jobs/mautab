<?php

use Illuminate\Database\Migrations\Migration;

class ChengePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('packages', function ($table) {
            $table->boolean('Recommended');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('packages', function ($table) {
            $table->dropColumn('Recommended');
        });
    }
}
