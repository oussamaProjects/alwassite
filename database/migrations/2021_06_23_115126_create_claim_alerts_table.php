<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claim_alerts', function (Blueprint $table) {
            $table->id();
            $table->text('message');
            $table->unsignedBigInteger('alerttype_id');
            $table->foreign('alerttype_id')->references('id')->on('alert_types');

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
        Schema::dropIfExists('claim_alerts');
    }
}