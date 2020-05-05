<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BannerAddMobileSupport extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::table('banners', function (Blueprint $table) {

            $table->string('mobile_path_en')->nullable();
            $table->string('mobile_path_tc')->nullable();
            $table->string('mobile_path_sc')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //

        Schema::table('banners', function (Blueprint $table) {
            $table->dropColumn(['mobile_path_en', 'mobile_path_tc', 'mobile_path_sc']);
        });

    }
}
