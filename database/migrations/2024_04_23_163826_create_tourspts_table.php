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
        Schema::create('tours_pts', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',120)->unique();
            $table->string('descripcion',250)->nullable();
            $table->text('contenido');
            $table->text('resumen');
            $table->text('detallado');
            $table->text('incluidos');            
            $table->text('importante')->nullable();
            $table->string('ubicacion');
            $table->integer('precio');
            $table->integer('dias');
            $table->string('img');  
            $table->string('mapa')->nullable();      
            $table->string('categoria');
            $table->string('keywords');
            $table->string('slug')->unique(); 
            $table->string('clase');
            $table->unsignedBigInteger('tour_id')->nullable();
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');
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
        Schema::dropIfExists('tours_pts');
    }
};
