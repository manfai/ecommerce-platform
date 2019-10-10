<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPaymentIdToOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function ($table) {
            $table->unsignedBigInteger('payment_id')->after('paid_at');
            $table->foreign('payment_id')->references('id')->on('payments')->onDelete('cascade'); //REMARK:payment不可以delete!!!!!!!!
            $table->unsignedBigInteger('paid_no')->nullable()->after('paid_at');
            $table->foreign('paid_no')->references('id')->on('order_payments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('payment_id');
            $table->dropColumn('paid_no');
        });
    }
}
