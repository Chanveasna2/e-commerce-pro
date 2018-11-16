<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblOrderingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_orderings', function (Blueprint $table) {
            $table->increments('ordering_id');
            $table->integer('pro_id');
            $table->integer('qty');
            $table->float('total');
            $table->integer('user_id');
            $table->string('user_address');
            $table->string('user_phone');
            $table->string('ind',2);
            $table->string('inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_orderings');
    }
}
