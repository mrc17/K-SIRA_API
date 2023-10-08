<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('corps_metiers', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_branche')
            ->constrained('branches_d_activites')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('nom_du_corps_de_metier');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('corps_metiers');
    }
};
