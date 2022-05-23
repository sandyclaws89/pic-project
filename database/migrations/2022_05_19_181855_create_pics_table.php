<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /*Integer non vuole la length */
        Schema::create('pics', function (Blueprint $table) {
            $table->id();
            $table->string('image', 250);
            $table->float('price')->nullable();
            $table->string('post_title', 250)->nullable();
            $table->string('pic_title', 250)->nullable();
            $table->text('description')->nullable();
            $table->string('author', 250)->nullable();
            $table->string('state_place', 250)->nullable();
            $table->string('shoot_place', 250)->nullable();
            $table->time('pic_time')->nullable();
            $table->date('pic_date', 250)->nullable();
            $table->integer('size');
            $table->string('type', 250);
            $table->boolean('on_sale', 250);
            $table->integer('vote')->nullable();
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
        Schema::dropIfExists('pics');
    }
}
