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
        Schema::create('enblogs_categoria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('enblog_id');
            $table->unsignedBigInteger('entag_id');
            $table->timestamps();
            $table->foreign('enblog_id')->references('id')->on('enblogs')->onDelete('cascade');
            $table->foreign('entag_id')->references('id')->on('entags')->onDelete('cascade');
            $table->unique(['enblog_id', 'entag_id']); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enblogs_categoria');
    }
};
