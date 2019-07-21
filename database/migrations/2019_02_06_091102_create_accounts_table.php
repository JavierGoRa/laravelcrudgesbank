<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->char('numCuenta', 24);
            $table->unsignedInteger('client_id');
            $table->timestamp('fechaAlta')->useCurrent();
            $table->decimal('saldo',10,2)->default(0);
            $table->timestamp('fechaUMov')->useCurrent();
            $table->integer('numMvtos')->default(0);
            $table->foreign('client_id')->references('id')->on('clients');
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
        Schema::dropIfExists('accounts');
    }
}
