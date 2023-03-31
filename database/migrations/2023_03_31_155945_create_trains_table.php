<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("company", 30);
            $table->string("from", 40);
            $table->string("to", 40);
            $table->DateTimeBetween("departure_time", ["now" + "10 hours"]);
            $table->DateTimeBetween("arrival_time", ["now" + "10 hours"]);
            $table->smallInt("code")->unsigned();
            $table->tinyInt("cars")->unsigned();
            $table->enum("on_time", ["yes", "no"]);
            $table->enum("canceled", ["yes", "no"]);
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
        Schema::dropIfExists('trains');
    }
};
