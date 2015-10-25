<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;

    class CreateStoryTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('content', 65535);
            $table->text('image', 65535);
            $table->integer('post_id')->nullable()->default(0);
            $table->integer('lang_id');
            $table->integer('seo_id')->nullable()->default(0);
            $table->timestamps();
            $table->integer('block_id')->default(0);
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('story');
    }

}
