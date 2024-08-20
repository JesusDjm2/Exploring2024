<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptblogs_categoria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ptblog_id');
            $table->unsignedBigInteger('ptag_id');
            $table->timestamps();
            $table->foreign('ptblog_id')->references('id')->on('ptblogs')->onDelete('cascade');
            $table->foreign('ptag_id')->references('id')->on('tag_pts')->onDelete('cascade');
            $table->unique(['ptblog_id', 'ptag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ptblogs_categoria');
    }
};
