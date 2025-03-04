<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ateliers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('theme');
            $table->integer('nb_places');
            $table->string('date_enregistrement');
            $table->string('date_heure');
            $table->string('duree');
            $table->integer('nb_participants');
            $table->unsignedBigInteger('responsable_id');
            $table->foreign('responsable_id')
                        ->references('id')
                        ->on('responsables');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ateliers');
    }
};
