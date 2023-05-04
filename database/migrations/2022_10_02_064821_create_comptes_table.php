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
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table -> string('nom');
            $table -> string('prenom');
            $table -> float('montant');
            $table -> float('debit_j');
            $table -> float('debit_h');
            $table -> float('debit_m');
            $table -> float('credit_j');
            $table -> float('credit_h');
            $table -> float('credit_m');
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
        Schema::dropIfExists('comptes');
    }
};
