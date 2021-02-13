<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pocetna_destinacija');
            $table->string('krajnja_destinacija');
            $table->integer('duzina_leta');
            $table->date('datum_poletanja');
            $table->integer('broj_mesta_u_avionu');
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
        Schema::dropIfExists('lets');
    }
}
