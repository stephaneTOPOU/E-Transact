<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('referencetransaction');
            $table->bigInteger('idstructure')->unsigned();
            $table->bigInteger('idproduit')->unsigned();
            $table->bigInteger('idadduser')->unsigned();
            $table->bigInteger('idclient')->unsigned();
            $table->double('montant');
            $table->string('statut');
            $table->string('autreinformation');
            $table->timestamps();
            $table->foreign('idstructure')->references('id')->on('structures')->onDelete('cascade');
            $table->foreign('idproduit')->references('id')->on('produits')->onDelete('cascade');
            $table->foreign('idadduser')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('idclient')->references('id')->on('clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
