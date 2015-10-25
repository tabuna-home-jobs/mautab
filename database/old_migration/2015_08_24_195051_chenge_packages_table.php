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
            $table->integer('WebDomains');
            $table->integer('WebAliases');
            $table->integer('DNSDomains');
            $table->integer('DNSRecords');
            $table->integer('MailDomains');
            $table->integer('MailAccounts');
            $table->integer('Databases');
            $table->integer('CronJobs');
            $table->integer('Backups');
            $table->biginteger('Quota');
            $table->biginteger('Bandwidth');
            $table->boolean('SSHAccess');
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
            $table->dropColumn('WebDomains');
            $table->dropColumn('WebAliases');
            $table->dropColumn('DNSDomains');
            $table->dropColumn('DNSRecords');
            $table->dropColumn('MailDomains');
            $table->dropColumn('MailAccounts');
            $table->dropColumn('Databases');
            $table->dropColumn('CronJobs');
            $table->dropColumn('Backups');
            $table->dropColumn('Quota');
            $table->dropColumn('Bandwidth');
            $table->dropColumn('SSHAccess');
        });
    }
}
