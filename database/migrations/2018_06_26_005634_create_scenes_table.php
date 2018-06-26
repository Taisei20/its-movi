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
            $table->integer('scene_number');
            $table->double('lng',9,6);
            $table->double('lat',8,6);
            $table->string('place_name');
            $table->text('adress');
            $table->text('memo');
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
