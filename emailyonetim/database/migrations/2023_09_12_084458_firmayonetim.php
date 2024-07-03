<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Firmayonetim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firmalar', function (Blueprint $table) {
            $table->id();
            $table->string('unvan');
            $table->string('alan');
            $table->bigInteger('tckn');
            $table->date('kurulus');
            $table->string('sanayisicil');
            $table->string('ticaretsicil');
            $table->foreign('sahibi')->references('id')->on('musteriler');
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
        //
    }
}
