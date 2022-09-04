<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxRegimeCfdiUsagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_regime_cfdi_usages', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('status');

            $table->unsignedBigInteger('cfdi_usages_id');
            
            $table->unsignedBigInteger('tax_regime_id');

            $table->foreign('cfdi_usages_id')->references('id')->on('cfdi_usages')->onDelete('cascade');

            $table->foreign('tax_regime_id')->references('id')->on('tax_regimes')->onDelete('cascade');

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
        Schema::dropIfExists('tax_regime__cfdi_usages');
    }
}
