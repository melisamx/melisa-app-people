<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeoplephonenumbersTable extends Migration
{
    /**
     * Run the migrations.
     * @table peoplePhoneNumbers
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peoplePhoneNumbers', function (Blueprint $table) {
            $table->char('id', 36)->primary();
            $table->char('idPeople', 36);
            $table->char('idIdentityCreated', 36);
            $table->string('number', 15)->unique();
            $table->tinyInteger('active')->default('1');
            $table->tinyInteger('isPrimary')->default('0');
            $table->dateTime('createdAt')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->char('idIdentityUpdated', 36)->nullable();
            $table->char('idLabel', 36)->nullable();
            $table->dateTime('updatedAt')->nullable();

            $table->foreign('idPeople')
                ->references('id')->on('people')
                ->onDelete('cascade')
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
       Schema::dropIfExists('peoplePhoneNumbers');
     }
}
