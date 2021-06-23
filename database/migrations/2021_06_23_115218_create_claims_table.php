<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->timestamp('date_envoi');
            $table->timestamp('date_reponse');
            $table->string('num_rec')->unique();
            $table->boolean('deleted');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')->references('id')->on('cities');

            $table->integer('complex_id')->unsigned();
            $table->foreign('complex_id')->references('id')->on('complexes');

            $table->integer('localisation_id')->unsigned();
            $table->foreign('localisation_id')->references('id')->on('localisations');

            $table->integer('claimType_id')->unsigned();
            $table->foreign('claimType_id')->references('id')->on('claim_types');

            $table->integer('claimStatus_id')->unsigned();
            $table->foreign('claimStatus_id')->references('id')->on('claim_statuses');

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