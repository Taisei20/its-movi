<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCutsTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('cuts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cut_number')->nullable();
            $table->text('memo')->nullable();
            $table->integer('scene_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('cuts');
    }
}
