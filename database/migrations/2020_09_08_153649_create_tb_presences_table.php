<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPresencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_presences', function (Blueprint $table) {
            $table->id();
            $table->date('heure_arrive');
            $table->date('heure_depart');
            $table->date('debut_pause');
            $table->date('fin_pause');
            $table->foreignId("user_id")->constrained();
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
        Schema::dropIfExists('tb_presences');
    }
}
