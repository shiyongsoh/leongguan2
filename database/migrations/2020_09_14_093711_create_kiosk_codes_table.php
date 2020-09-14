<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKioskCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kiosk_codes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->foreign('userid')->references('id')->on("users");
            $table->integer('kiosk_userid')->nullable();
            $table->integer('kioskCode');
            $table->string('active')->nullable();
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
        Schema::dropIfExists('kiosk_codes');
    }
}
