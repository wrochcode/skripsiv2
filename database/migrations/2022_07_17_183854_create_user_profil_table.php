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
        Schema::create('user_profil', function (Blueprint $table) {
            $table->id();
            $table->string('id_user',191);
            $table->string('planing',191);
            $table->string('gender');
            $table->integer('age');
            $table->double('height');
            $table->double('weight');
            $table->integer('activity');
            $table->integer('exercise_activity');
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
        Schema::dropIfExists('user_profil');
    }
};
