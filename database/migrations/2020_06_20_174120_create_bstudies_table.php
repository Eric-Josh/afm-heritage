<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBstudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bible_study', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('lesson_no');
            $table->unsignedSmallInteger('class');
            $table->string('title');
            $table->text('text');
            $table->text('mverse');
            $table->text('intro');
            $table->text('items');
            $table->text('conclusion');
            $table->unsignedSmallInteger('lang');
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
        Schema::dropIfExists('bible_study');
    }
}
