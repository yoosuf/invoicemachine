<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->morphs('addressable');
            $table->string('line_1');
            $table->string('line_2');
            $table->string('zip_code');
            $table->string('city');

            $table->integer('state_id')->unsigned();
            $table->foreign('state_id')
                ->references('id')->on('states')
                ->onDelete('cascade');

            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')
                ->references('id')->on('countries')
                ->onDelete('cascade');

            $table->float('latitude', 10, 6);
            $table->float('longitude', 10, 6);
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
        Schema::dropIfExists('addresses');
    }
}
