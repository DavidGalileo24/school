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
        Schema::create('alm_alumno', function (Blueprint $table) {
            $table->id();
            $table->string('alm_codigo', 100);
            $table->string('alm_nombre', 300);
            $table->integer('alm_edad');
            $table->string('alm_sexo', 100);
            $table->foreignId('alm_id_grd', 100)->constrained();
            $table->string('alm_observation', 300);
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
        Schema::dropIfExists('alm_alumno');
    }
};
