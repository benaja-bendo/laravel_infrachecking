<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_permissions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('motif');
            $table->string('crennaux')->nullable();
            $table->date('date_de_pernission')->nullable();
            $table->string('reponse_de_permission')->nullable();
            $table->string('commentaire')->nullable();
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
        Schema::dropIfExists('tb_permissions');
    }
}
