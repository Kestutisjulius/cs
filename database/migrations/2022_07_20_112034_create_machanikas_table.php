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
        Schema::create('machanikas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paslauga_id');
            $table->foreign('paslauga_id')->references('id')->on('paslaugas');
            $table->string('name', 50);
            $table->string('surname', 50);
            $table->string('photo',254);
            $table->unsignedTinyInteger('rating')->default(1);
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
        Schema::dropIfExists('machanikas');
    }
};
