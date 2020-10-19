<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddLocaleAndCurrencyToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('locale', '8')->default('en');
            $table->string('currency', '3')->default('HKD');
        });
    }

    /**
     * Reverse the migrations.
     * add_locale_and_currency_to_users_table
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('locale');
            $table->dropColumn('currency');
        });
    }
}
