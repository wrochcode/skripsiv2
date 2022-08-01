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
        Schema::create('foodsmenu', function (Blueprint $table) {
            $table->id();
            $table->string('id_user',191);
            $table->string('name',191);
            $table->double('calorie');
            $table->double('carb');
            $table->double('fat');
            $table->double('protein');
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
        Schema::dropIfExists('foodsmenu');
    }
};
