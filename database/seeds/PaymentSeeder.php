<?php

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::create([
            'code' => 'offline',
            'title' => 'Offline',
            'description' => 'offline',
            'provider' => 'manual',
            'enable' => 1,
            'card_data' => 0,
        ]);
        Payment::create([
            'code' => 'payme',
            'title' => 'Payme',
            'description' => 'payme',
            'provider' => 'manual',
            'enable' => 1,
            'card_data' => 0,
        ]);
        Payment::create([
            'code' => 'paypal',
            'title' => 'Paypal',
            'description' => 'paypal',
            'provider' => 'paypal',
            'enable' => 1,
            'card_data' => 0,
        ]);
        Payment::create([
            'code' => 'creditcard',
            'title' => 'Credit Card',
            'description' => 'mastercard, visa',
            'provider' => 'stripe',
            'enable' => 1,
            'card_data' => 1,
        ]);
    }
}
