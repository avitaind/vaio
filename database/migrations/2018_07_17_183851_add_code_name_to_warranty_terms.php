<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCodeNameToWarrantyTerms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('warranty_terms', function (Blueprint $table) {
            //
            $table->string('name')->nullable();
            $table->string('code')->nullable()->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('warranty_terms', function (Blueprint $table) {
            //
            $table->dropColumn('name');
            $table->dropColumn('code');
        });
    }
}
