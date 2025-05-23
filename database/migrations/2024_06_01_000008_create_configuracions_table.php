<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('direccion')->nullable();
            $table->string('telefono')->nullable();
            $table->boolean('telefonoActivo')->default(false);
            $table->string('telPresidencia')->nullable();
            $table->boolean('telPresActivo')->default(false);
            $table->string('telSecretaria')->nullable();
            $table->boolean('telSecActivo')->default(false);
            $table->string('telTesoreria')->nullable();
            $table->boolean('telTesActivo')->default(false);
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
        Schema::dropIfExists('configuracions');
    }
}
