<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScenesTable extends Migration{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('scenes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('scene_number')->nullable();
            $table->double('lng',9,6)->nullable();
            $table->double('lat',8,6)->nullable();
            $table->string('place_name')->nullable();
            $table->text('adress')->nullable();
            $table->text('memo')->nullable();
            $table->integer('product_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('scenes');
    }
}
