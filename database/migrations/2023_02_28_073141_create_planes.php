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
        Schema::create('planes', function (Blueprint $table) {
            $table->id();
            $table->string('plane_name');
            $table->double('price');
            $table->integer('expiration_day');
            $table->integer('number_of_usecase');
            $table->integer('serial_no');
            $table->integer('maximum_word_generator');
            $table->boolean('enable_custom_search_search');
            $table->boolean('status');
            $table->text('description');
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
        Schema::dropIfExists('planes');
    }
};
