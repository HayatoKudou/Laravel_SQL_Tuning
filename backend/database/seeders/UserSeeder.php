<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::truncate();  // 既存データを削除する場合のみ
        \App\Models\User::factory(10000)->create();  // 10個作成ね！
    }
}
