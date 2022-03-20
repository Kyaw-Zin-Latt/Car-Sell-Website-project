<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string("title",255);
            $table->string("slug");
            $table->string("photo",255);
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();
            $table->integer("price");
            $table->string("location",255);
            $table->string("engine",255);
            $table->integer("mileage")->nullable();
            $table->tinyInteger("condition");
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
        Schema::dropIfExists('cars');
    }
}
