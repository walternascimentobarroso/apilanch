<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('categories_restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->integer('restaurant_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('categories_restaurants');
    }
}
