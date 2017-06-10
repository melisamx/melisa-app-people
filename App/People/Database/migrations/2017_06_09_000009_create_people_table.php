<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     * @table people
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('idIdentityCreated', 36);
            $table->string('name', 45);
            $table->string('lastName', 45);
            $table->tinyInteger('sex')->default('1');
            $table->tinyInteger('active')->default('1');
            $table->dateTime('createdAt')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->smallInteger('idBloodType')->nullable();
            $table->char('idIdentityUpdated', 36)->nullable();
            $table->dateTime('updatedAt')->nullable();
            $table->string('nickname', 45)->nullable();
            $table->date('birthday')->nullable();
            $table->string('nss', 11)->nullable();
            $table->string('curp', 18)->nullable();
            $table->string('rfc', 13)->nullable();

            $table->unique(["name", "lastName"], 'unique_people');

            $table->foreign('idBloodType')
                ->references('id')->on('bloodTypes')
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
       Schema::dropIfExists('people');
     }
}
