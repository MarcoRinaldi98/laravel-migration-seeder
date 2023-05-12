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

            $table->string('azienda', 64);
            $table->string('stazione_di_partenza', 64);
            $table->string('stazione_di_arrivo', 64);
            $table->datetime('orario_di_partenza');
            $table->datetime('orario_di_arrivo');
            $table->string('codice_treno', 12);
            $table->unsignedTinyInteger('carrozze');
            $table->boolean('in_orario')->default(1);
            $table->boolean('cancellato')->default(0);

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
