<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nombre')->nullable();
            $table->string('surname')->nullable();
            $table->string('especialidad')->nullable();
            $table->string('universidad')->nullable();
            $table->string('ano')->nullable();
            $table->string('org')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->string('direccion')->nullable();
            $table->string('direccion1')->nullable();
            $table->string('estado')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('telefonos')->nullable();
            $table->string('tel1')->nullable();
            $table->string('telhome')->nullable();
            $table->string('telmovil')->nullable();
            $table->string('telprincipal')->nullable();
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('twitter')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('avatar')->nullable();
            $table->string('vcard')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directories');
    }
}
