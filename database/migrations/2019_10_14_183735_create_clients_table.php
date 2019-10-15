<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->string('email');
            $table->string('name');
            $table->string('surname');
            $table->string('phone');
            $table->string('city');
            $table->string('postcode');
            $table->string('street');
            $table->string('building_nr');
            $table->string('room_nr')->nullable();
            $table->string('stair_case')->nullable();
            $table->string('floor')->nullable();
            $table->string('stair_case_code')->nullable();

            $table->string('note')->nullable();

            $table->boolean('marketing_allowed');
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
        Schema::dropIfExists('clients');
    }
}
