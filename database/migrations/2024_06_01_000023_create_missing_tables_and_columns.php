<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMissingTablesAndColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Example for one table, repeat for all missing tables
        if (!Schema::hasTable('actualizacions')) {
            Schema::create('actualizacions', function (Blueprint $table) {
                $table->id();
                $table->string('titulo')->nullable();
                $table->string('slug')->nullable();
                $table->text('descripcion')->nullable();
                $table->string('avatar')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }

        // Repeat similar blocks for all other missing tables
        // For brevity, only one example is shown here

        // Add 'movil' column to contacts table if it does not exist
        if (Schema::hasTable('contacts') && !Schema::hasColumn('contacts', 'movil')) {
            Schema::table('contacts', function (Blueprint $table) {
                $table->string('movil')->nullable()->after('comment');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // This migration does not drop tables or columns to avoid data loss
    }
}
