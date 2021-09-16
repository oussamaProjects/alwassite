<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {

            $table->id();

            $table->string('objet');
            $table->text('message');
            $table->timestamp('date_envoi')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('date_reponse')->null();
            $table->string('num_rec')->unique();
            $table->boolean('deleted')->default(0);

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities');

            $table->unsignedBigInteger('localisation_id');
            $table->foreign('localisation_id')->references('id')->on('localisations');

            $table->unsignedBigInteger('claimType_id');
            $table->foreign('claimType_id')->references('id')->on('claim_types');

            $table->unsignedBigInteger('claimStatus_id');
            $table->foreign('claimStatus_id')->references('id')->on('claim_statues');

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
        Schema::dropIfExists('claims');
    }
}
