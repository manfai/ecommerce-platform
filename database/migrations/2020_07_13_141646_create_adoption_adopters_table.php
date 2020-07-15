<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdoptionAdoptersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoption_adopters', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('adoption_id'); //出post者
            $table->foreign('adoption_id')->references('id')->on('adoptions')->onDelete('cascade');
            $table->unsignedBigInteger('user_id'); //出post者
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('status')->default('public');
            $table->text('comment')->nullable();
            $table->boolean('interested')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->json('social_media');
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
        Schema::dropIfExists('adoption_adopters');
    }
}
