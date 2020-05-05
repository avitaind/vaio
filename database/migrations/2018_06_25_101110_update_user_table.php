<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string("first_name")->nullable();
            $table->string("last_name")->nullable();
            $table->string("gender")->nullable();
            $table->date("birthday")->nullable();
            $table->string('profile_pic')->nullable();
            $table->string("country")->nullable();
            $table->string("city")->nullable();
            $table->string("address", 500)->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('age_group')->nullable();
            $table->boolean('is_verified')->default(false);
            $table->boolean('accept_edm')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn([
                "first_name",
                "last_name",
                "gender",
                "birthday",
                "profile_pic",
                "country",
                "city",
                "address",
                "phone",
                "mobile",
                "age_group",
                "is_verified",
                "accept_edm",
            ]);

        });
    }
}
