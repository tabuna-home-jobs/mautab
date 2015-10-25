<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;

    class AddForenkeyStoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('story', function (Blueprint $table) {
            $table->dropColumn('post_id');
            $table->dropColumn('lang_id');
            $table->dropColumn('seo_id');
            $table->dropColumn('block_id');
        });


        Schema::table('story', function (Blueprint $table) {
            $table->unsignedInteger('post_id')->nullable();
            $table->unsignedInteger('lang_id')->nullable();
            $table->unsignedInteger('seo_id')->nullable();
            $table->unsignedInteger('block_id')->nullable();
            $table->unsignedInteger('element_id')->nullable();
        });


        Schema::table('story', function (Blueprint $table) {
            $table->foreign('post_id')->references('id')->on('post')->onDelete('cascade');
            $table->foreign('lang_id')->references('id')->on('language')->onDelete('cascade');
            $table->foreign('seo_id')->references('id')->on('seo')->onDelete('cascade');
            $table->foreign('block_id')->references('id')->on('block')->onDelete('cascade');
            $table->foreign('element_id')->references('id')->on('element')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
