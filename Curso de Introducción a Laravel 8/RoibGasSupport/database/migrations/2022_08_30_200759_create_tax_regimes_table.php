<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxRegimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_regimes', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->unsignedBigInteger('c_tax_regime')->length(3);
            
            $table->string('description');

            $table->boolean('physical_person');

            $table->boolean('moral_person');

            $table->date('start_date');

            $table->date('end_date');

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
        Schema::dropIfExists('tax_regimes');
    }
}
