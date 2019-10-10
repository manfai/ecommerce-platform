<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 通過 factory 方法生成 100 個用户並保存到數據庫中
        factory(\App\Models\User::class, 100)->create();
    }
}
