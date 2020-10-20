<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('settings', function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->string('name')->unique();
        //     $table->string('value')->nullable();
        //     $table->datetime('updated_at')->nullable();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('settings');
    }
}
