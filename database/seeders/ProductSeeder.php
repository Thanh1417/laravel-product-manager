<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            ['store_id' => 1, 'name' => 'Bút bi', 'description' => 'Bút bi chất lượng cao', 'price' => 5000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 1, 'name' => 'Vở học sinh', 'description' => 'Vở 200 trang', 'price' => 15000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 2, 'name' => 'Áo thun nam', 'description' => 'Áo thun cotton thoáng mát', 'price' => 200000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 2, 'name' => 'Quần jeans nữ', 'description' => 'Quần jeans thời trang', 'price' => 300000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 3, 'name' => 'Son môi', 'description' => 'Son môi lâu trôi', 'price' => 120000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 4, 'name' => 'Điện thoại thông minh', 'description' => 'Điện thoại mới nhất', 'price' => 10000000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 5, 'name' => 'Giày thể thao nam', 'description' => 'Giày thể thao thoải mái', 'price' => 800000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 5, 'name' => 'Giày cao gót nữ', 'description' => 'Giày cao gót sang trọng', 'price' => 600000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 1, 'name' => 'Bảng viết', 'description' => 'Bảng viết trắng', 'price' => 25000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 2, 'name' => 'Áo khoác nữ', 'description' => 'Áo khoác dày dặn', 'price' => 400000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 3, 'name' => 'Kem dưỡng da', 'description' => 'Kem dưỡng da ban đêm', 'price' => 300000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 4, 'name' => 'Laptop gaming', 'description' => 'Laptop cấu hình cao', 'price' => 25000000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 5, 'name' => 'Dép sandal nữ', 'description' => 'Dép sandal thoải mái', 'price' => 200000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 1, 'name' => 'Bảng tính toán', 'description' => 'Bảng tính toán điện tử', 'price' => 70000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 2, 'name' => 'Quần short nam', 'description' => 'Quần short thoải mái', 'price' => 150000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 3, 'name' => 'Nước hoa', 'description' => 'Nước hoa nam cao cấp', 'price' => 500000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 4, 'name' => 'Máy ảnh kỹ thuật số', 'description' => 'Máy ảnh chất lượng cao', 'price' => 15000000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 5, 'name' => 'Giày lười nam', 'description' => 'Giày lười thoải mái', 'price' => 400000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 1, 'name' => 'Bút chì', 'description' => 'Bút chì gỗ tự nhiên', 'price' => 3000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 2, 'name' => 'Áo sơ mi nam', 'description' => 'Áo sơ mi công sở', 'price' => 250000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 3, 'name' => 'Kem chống nắng', 'description' => 'Kem chống nắng SPF50', 'price' => 200000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 4, 'name' => 'Loa bluetooth', 'description' => 'Loa bluetooth không dây', 'price' => 800000, 'created_at' => now(), 'updated_at' => now()],
            ['store_id' => 5, 'name' => 'Giày búp bê nữ', 'description' => 'Giày búp bê dễ thương', 'price' => 350000, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
