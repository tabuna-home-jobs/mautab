<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;

    class CreatePackagesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('price');
            $table->timestamps();
            $table->integer('WebDomains');
            $table->integer('WebAliases');
            $table->integer('DNSDomains');
            $table->integer('DNSRecords');
            $table->integer('MailDomains');
            $table->integer('MailAccounts');
            $table->integer('Databases');
            $table->integer('CronJobs');
            $table->integer('Backups');
            $table->bigInteger('Quota');
            $table->bigInteger('Bandwidth');
            $table->boolean('SSHAccess');
            $table->boolean('Recommended');
            $table->boolean('Hidden');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('packages');
    }

}
