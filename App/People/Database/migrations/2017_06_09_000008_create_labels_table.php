<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLabelsTable extends Migration
{
    /**
     * Run the migrations.
     * @table labels
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labels', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->smallInteger('idLabelType');
            $table->char('idIdentityCreated', 36);
            $table->string('name', 95);
            $table->string('key', 45);
            $table->tinyInteger('active')->default(1);
            $table->dateTime('createdAt')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->dateTime('updatedAt')->nullable();

            $table->unique(["idLabelType", "name"], 'unique_labels');
            $table->unique(["idLabelType", "key"], 'unique_key_labels');

            $table->foreign('idLabelType', 'fk_pLabels_pLabelsTypes1_idx')
                ->references('id')->on('labelsTypes')
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
       Schema::dropIfExists('labels');
     }
}
