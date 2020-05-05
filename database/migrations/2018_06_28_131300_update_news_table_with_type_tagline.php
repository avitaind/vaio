<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateNewsTableWithTypeTagline extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('news', function (Blueprint $table) {
            //
            $table->string('type')->index();    // Type = 'news' / 'life' / 'offer'
            $table->unsignedInteger('category_id')->nullable();
            $table->dropColumn('status');

            $table->foreign('category_id')->references('id')->on('news_categories')->onDelete('set null');
        });



        Schema::table('news_translations', function (Blueprint $table) {
            $table->string('tagline', 1000)->nullable();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function (Blueprint $table) {

            $table->dropForeign(['category_id']);

            $table->dropColumn('type');
            $table->dropColumn('category_id');

            $table->string('status')->index();
        });

        Schema::table('news_translations', function (Blueprint $table) {
            $table->dropColumn('tagline');
        });
    }
}
