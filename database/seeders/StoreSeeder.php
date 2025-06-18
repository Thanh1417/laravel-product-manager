<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('stores')->insert([
            ['name' => 'Cửa hàng văn phòng phẩm', 'address' => '170 Tây Sơn', 'phone' => '0987564123', 'created_at' => '2025-01-01 08:00:00', 'updated_at' => '2025-01-02 09:00:00'],
            ['name' => 'Cửa hàng quần áo', 'address' => '100 Chùa Bộc', 'phone' => '0879456123', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cửa hàng mĩ phẩm', 'address' => '200 Thái Hà', 'phone' => '0983783942', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cửa hàng điện tử', 'address' => '150 Nguyễn Lương Bằng', 'phone' => '0212559417', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cửa hàng giày dép', 'address' => '1 Nguyễn Lương Bằng', 'phone' => '0525687041', 'created_at' => now(), 'updated_at' => now()],

        ]);
    }
}
