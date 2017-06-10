<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabelstypesTable extends Migration
{
    /**
     * Run the migrations.
     * @table labelsTypes
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labelsTypes', function (Blueprint $table) {
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
       Schema::dropIfExists('labelsTypes');
     }
}
