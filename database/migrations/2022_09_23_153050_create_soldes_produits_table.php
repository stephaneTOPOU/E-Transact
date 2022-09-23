<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoldesProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('soldes_produits', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('idstructure')->unsigned();
            $table->bigInteger('idproduit')->unsigned();
            $table->double('montant');
            $table->timestamps();
            $table->foreign('idstructure')->references('id')->on('structures')->onDelete('cascade');
            $table->foreign('idproduit')->references('id')->on('produits')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('soldes_produits');
    }
}
