<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPhotoToRestaurantesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->string('photo')
                ->after('description')
                ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('restaurants', function (Blueprint $table) {
            $table->dropColumn('photo');
        });
    }
}
