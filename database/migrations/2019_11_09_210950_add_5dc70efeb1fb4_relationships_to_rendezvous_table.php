<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Add5dc70efeb1fb4RelationshipsToRendezvousTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rendezvouses', function(Blueprint $table) {
            if (!Schema::hasColumn('rendezvouses', 'client_id')) {
                $table->integer('client_id')->unsigned()->nullable();
                $table->foreign('client_id', '42224_5dc1fba621631')->references('id')->on('clients')->onDelete('cascade');
                }
                
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('rendezvouses', function(Blueprint $table) {
            
        });
    }
}
