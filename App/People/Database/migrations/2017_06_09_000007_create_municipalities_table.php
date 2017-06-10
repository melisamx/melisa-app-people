<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipalitiesTable extends Migration
{
    /**
     * Run the migrations.
     * @table municipalities
     *
     * @return void
     */
    public function up()
    {
        Schema::create('municipalities', function (Blueprint $table) {
            $table->smallInteger('id', true);
            $table->smallInteger('idState');
            $table->string('name', 90);

            $table->unique(["idState", "name"], 'unique_municipalities');

            $table->foreign('idState', 'fk_municipalities_states1_idx')
                ->references('id')->on('states')
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
       Schema::dropIfExists('municipalities');
     }
}
