<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('version');
            $table->integer('user_id');
            $table->string('model_number');
            $table->string('serial_number');
            $table->date('birthday')->nullable();
            $table->string('age_group')->nullable();
            $table->string('gender')->nullable();
            $table->text('data');
            $table->dateTime('completed_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_surveys');
    }
}
