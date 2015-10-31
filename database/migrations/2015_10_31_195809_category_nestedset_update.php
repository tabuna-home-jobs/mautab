<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Kalnoy\Nestedset\NestedSet;

    class CategoryNestedsetUpdate extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::table('category', function (Blueprint $table) {
                NestedSet::columns($table);
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::table('category', function (Blueprint $table) {
                NestedSet::dropColumns($table);
            });
        }
    }
