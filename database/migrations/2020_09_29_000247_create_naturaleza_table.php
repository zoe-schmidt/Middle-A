<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNaturalezaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naturaleza', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string("nombre");
            $table->string("descripcion");
            $table->string("foto 1")->nullable();
            $table->string("foto 2")->nullable();
            $table->string("foto 3")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('naturaleza');
    }
}
