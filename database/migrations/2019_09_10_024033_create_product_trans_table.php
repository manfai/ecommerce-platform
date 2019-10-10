<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_trans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->morphs('model');
            $table->string('lang');
            $table->string('title');
            $table->text('description');
            $table->json('meta');
            $table->timestamps();

            $table->unique(['model_type', 'model_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_trans');
    }
}
