<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracts', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('no');
            $table->string('title');
            $table->text('content');
            $table->unsignedSmallInteger('lang');
            $table->string('durl');
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
        Schema::dropIfExists('tracts');
    }
}
