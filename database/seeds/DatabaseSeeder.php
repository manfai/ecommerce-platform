<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersSeeder::class);
        // $this->call(UserAddressesSeeder::class);
        $this->call(ProductsSeeder::class);
        $this->call(PaymentSeeder::class);
        // $this->call(AdoptionSeeder::class);
        // $this->call(AdoptionUploadSeeder::class);
        // $this->call(CouponCodesSeeder::class);
        // $this->call(OrdersSeeder::class);
    }
}
