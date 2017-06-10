<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypessettlementsTable extends Migration
{
    /**
     * Run the migrations.
     * @table typesSettlements
     *
     * @return void
     */
    public function up()
    {
        Schema::create('typesSettlements', function (Blueprint $table) {
            $table->smallInteger('id', true);
            $table->string('name', 75)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('typesSettlements');
     }
}
