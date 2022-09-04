<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCfdiUsagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cfdi_usages', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('c_cfdi_usage');
            
            $table->string('description');

            $table->boolean('physical_person');

            $table->boolean('moral_person');

            $table->date('start_date');

            $table->date('end_date');

            $table->unsignedBigInteger('tax_regime_of_the_recipient')->length(3);

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
        Schema::dropIfExists('cfdi_usages');
    }
}
