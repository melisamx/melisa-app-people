<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettlementsTable extends Migration
{
    /**
     * Run the migrations.
     * @table settlements
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settlements', function (Blueprint $table) {
            $table->increments('id');
            $table->smallInteger('idMunicipality');
            $table->smallInteger('idTypeSettlement');
            $table->integer('postalCode');
            $table->string('settlement', 255);

            $table->unique(["postalCode", "idMunicipality", "settlement", "idTypeSettlement"], 'unique_settlements');

            $table->foreign('idTypeSettlement')
                ->references('id')->on('typesSettlements')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('idMunicipality')
                ->references('id')->on('municipalities')
                ->onDelete('cascade')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('settlements');
     }
}
