<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarSpecificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_specifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_model_id');
            $table->unsignedBigInteger('car_brand_id');
            $table->longText('overview')->nullable();
            $table->text('short_description')->nullable();
            $table->integer('number_of_cylinder')->nullable();
            $table->float('displacement')->nullable();
            $table->float('power_kw')->nullable();
            $table->float('power_hp')->nullable();
            $table->float('fuel_consumption_urban')->nullable();
            $table->float('fuel_consumption_nonurban')->nullable();
            $table->float('fuel_consumption_combined')->nullable();
            $table->float('co2_emission')->nullable();
            $table->integer('length')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->float('wheelbase')->nullable();
            $table->float('drag_co_efficient')->nullable();
            $table->float('unladen_weight_din')->nullable();
            $table->float('unladen_weight_eu')->nullable();
            $table->float('speed')->nullable();
            $table->float('acceleration')->nullable();
            $table->float('in_gear_acceleration')->nullable();
            $table->float('flexibility')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->string('system')->nullable();
            $table->string('seat')->nullable();
            $table->string('min_year')->nullable();
            $table->string('max_year')->nullable();
            $table->decimal('price')->nullable();
            $table->string('city')->nullable();

            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->string('image6')->nullable();
            $table->string('image7')->nullable();
            $table->string('image8')->nullable();
            $table->string('image9')->nullable();
            $table->string('image10')->nullable();
            $table->string('image11')->nullable();
            $table->string('image12')->nullable();

            $table->string('banner1')->nullable();
            $table->string('banner2')->nullable();
            $table->string('banner3')->nullable();
            $table->string('video1')->nullable();
            $table->string('video2')->nullable();
            $table->string('extra')->nullable();


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
        Schema::dropIfExists('car_specifications');
    }
}
