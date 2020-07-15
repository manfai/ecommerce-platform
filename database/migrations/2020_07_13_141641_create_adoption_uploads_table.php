<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdoptionUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoption_uploads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('uuid')->unique();
            $table->unsignedBigInteger('adoption_id'); //出post者
            $table->foreign('adoption_id')->references('id')->on('adoptions')->onDelete('cascade');
            $table->string('size');
            $table->string('type');
            $table->string('filetype');
            $table->string('filename');
            $table->string('status')->default('public');
            $table->text('remark')->nullable();
            $table->boolean('verified')->default(false);
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
        Schema::dropIfExists('adoption_uploads');
    }
}
