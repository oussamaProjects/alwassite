<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('nom');
            $table->string('prenom');
            $table->string('photo')->nullable();
            $table->boolean('active')->default(true);;
            $table->boolean('deleted')->default(false);;
            $table->string('cin')->nullable();
            $table->string('tel_mobile')->nullable();
            $table->string('tel_fixe')->nullable();
            $table->string('adresse')->nullable();
            $table->enum('sexe', ['male', 'female']);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}