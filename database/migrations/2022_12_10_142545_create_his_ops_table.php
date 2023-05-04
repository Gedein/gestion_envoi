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
        Schema::create('his_ops', function (Blueprint $table) {
            $table->id();
            $table -> string('nom');
            $table -> string('prenom');
            $table -> float('montan_debit');
            $table -> string('curency_debit');
            $table -> float('taux_debit');
            $table -> float('montant_credit');
            $table -> string('curency_credit');
            $table -> float('taux_credit');
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
        Schema::dropIfExists('his_ops');
    }
};
