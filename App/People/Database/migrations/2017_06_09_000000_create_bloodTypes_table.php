<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBloodtypesTable extends Migration
{
    /**
     * Run the migrations.
     * @table bloodTypes
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloodTypes', function (Blueprint $table) {
            $table->smallInteger('id', true);
            $table->string('name', 11)->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('bloodTypes');
     }
}
