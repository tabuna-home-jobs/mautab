<?php

    use Illuminate\Database\Migrations\Migration;

    class CreateNewColumsUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function ($table) {
            $table->string('phone');
            $table->boolean('email_notification');
            $table->boolean('phone_notification');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('phone');
            $table->dropColumn('phone_notification');
            $table->dropColumn('email_notification');
        });
    }
}
