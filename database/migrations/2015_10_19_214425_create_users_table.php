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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nickname')->unique();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('server')->default('151.80.164.81');
            $table->float('balans', 10, 0)->default(0);
            $table->integer('package_id')->nullable();
            $table->string('role');
            $table->string('lang')->default('en');
            $table->string('password', 60);
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
            $table->boolean('suspend')->default(0);
            $table->string('phone');
            $table->boolean('email_notification');
            $table->boolean('phone_notification');
            $table->text('encrypt_password', 65535);
            $table->text('permissions', 65535);
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
