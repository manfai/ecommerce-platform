<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();

            $table->morphs('subject'); //categroy::class and its id

            $table->integer('causer_id')->unsigned()->nullable();
            $table->string('causer_type')->nullable();
            $table->index(['causer_id', 'causer_type']);

            $table->string('title');
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('platform'); //website/facebook/phone/whatsapp/etc/email
            $table->boolean('closed')->default(0);
            $table->timestamp('closed_at')->nullable();
            $table->unsignedBigInteger('closed_by')->nullable(); // by staff
            $table->timestamps();

        });

        Schema::create('ticket_responses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ticket_id');
            $table->foreign('ticket_id')->references('id')->on('tickets')->onDelete('cascade');
            $table->morphs('user'); //answer by staff or user
            $table->text('content');
            $table->string('type');
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
        Schema::dropIfExists('tickets');
        Schema::dropIfExists('ticket_responses');
    }
}
