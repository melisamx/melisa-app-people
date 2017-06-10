<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleaddressesTable extends Migration
{
    /**
     * Run the migrations.
     * @table peopleAddresses
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peopleAddresses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->char('idPeople', 36);
            $table->smallInteger('idState');
            $table->char('idIdentityCreated', 36);
            $table->tinyInteger('isPrimary')->default('0');
            $table->dateTime('createdAt')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->smallInteger('idMunicipality')->nullable();
            $table->char('idLabel', 36)->nullable();
            $table->char('idIdentityUpdated', 36)->nullable();
            $table->string('street', 150)->nullable();
            $table->string('colony', 100)->nullable();
            $table->string('postalCode', 45)->nullable();
            $table->dateTime('updatedAt')->nullable();

            $table->foreign('idPeople')
                ->references('id')->on('people')
                ->onDelete('cascade')
                ->onUpdate('no action');

            $table->foreign('idState')
                ->references('id')->on('states')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('idMunicipality')
                ->references('id')->on('municipalities')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('idLabel')
                ->references('id')->on('labels')
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
       Schema::dropIfExists('peopleAddresses');
     }
}
