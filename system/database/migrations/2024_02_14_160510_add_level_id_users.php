<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Set up the table you want to change
        Schema::table('users', function(Blueprint $table){

            // Add field, (is nullable) because the table could have
            // data already
            $table->bigInteger('level_id')
                ->unsigned()
                ->nullable()
                ->after('id');

            // Add the relation (from user) to levels table
            // NOTE: The order is: local_field, foreing_id, table (plural)
            $table->foreign('level_id')->references('id')->on('levels')
            ->onDele('set null')
            ->onUpdate('cascade');

            /**
            * Relation Notes:
             *  If a level is deleted "->onDele('set null')"
             *  I dont want the user to be deleted I want 
             * the field "level_id" to be set to null
             */

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
