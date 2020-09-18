<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbNusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_nusers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->string('image');
            $table->string('tel');
            $table->string('adresse');
            $table->text('cours')->nullable();
            $table->string('fonction',255)->default("inconnue");
            $table->string('isactif')->default('oui');
            $table->string('immei')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('tb_nusers');
    }
}
