<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNbrPropertyAndPaiesAmountToBlocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blocs', function (Blueprint $table) {
            $table->integer('nbr_property');
            $table->string('paies_amount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blocs', function (Blueprint $table) {
            $table->dropColumn('nbr_property');
            $table->dropColumn('paies_amount');
        });
    }
}
