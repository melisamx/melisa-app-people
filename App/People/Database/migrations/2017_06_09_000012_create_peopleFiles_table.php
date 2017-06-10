<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeoplefilesTable extends Migration
{
    /**
     * Run the migrations.
     * @table peopleFiles
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peopleFiles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('idPeople', 36);
            $table->smallInteger('idFileType');
            $table->char('idFile', 36);
            $table->char('idIdentityCreated', 36);
            $table->dateTime('createdAt')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->foreign('idPeople')
                ->references('id')->on('people')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('idFileType')
                ->references('id')->on('filesTypes')
                ->onDelete('no action')
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
       Schema::dropIfExists('peopleFiles');
     }
}
