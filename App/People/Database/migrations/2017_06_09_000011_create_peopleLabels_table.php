<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeoplelabelsTable extends Migration
{
    /**
     * Run the migrations.
     * @table peopleLabels
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peopleLabels', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('idPeople', 36);
            $table->char('idLabel', 36);
            $table->char('idIdentityCreated', 36);
            $table->dateTime('createdAt')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->unique(["idPeople", "idLabel"], 'unique_peopleLabels');

            $table->foreign('idPeople')
                ->references('id')->on('people')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('idLabel')
                ->references('id')->on('labels')
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
       Schema::dropIfExists('peopleLabels');
     }
}
