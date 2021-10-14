<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ads', function (Blueprint $table) {
            $table->integer('superficy')->default(0);
            $table->integer('rooms')->default(0);
            $table->integer('etg')->default(0);
            $table->integer('contrat')->default(0);
            $table->boolean('balcony')->default(false);
            $table->boolean('swimming_pool')->default(false);
            $table->boolean('vue')->default(false);
            $table->boolean('car_park')->default(false);
            $table->integer('condition')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ads', function (Blueprint $table) {
            $table->dropColumn('superficy');
            $table->dropColumn('rooms');
            $table->dropColumn('etg');
            $table->dropColumn('contrat');
            $table->dropColumn('balcony');
            $table->dropColumn('swimming_pool');
            $table->dropColumn('vue');
            $table->dropColumn('car_park');
            $table->dropColumn('condition');
        });
    }
}
