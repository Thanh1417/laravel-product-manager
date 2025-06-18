<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeaderController;

Route::get('/', function () {
    return view('welcome');
});

// ĐỊNH NGHĨA ROUTE ĐỂ HIỂN THỊ TRANG XÁC NHẬN XÓA
// Route này phải được đặt TRƯỚC Route::resource để nó được ưu tiên xử lý.
// Nó sẽ trỏ đến phương thức 'delete' trong LeaderController.
Route::get('products/{product}/delete', [ProductController::class, 'delete'])->name('products.delete');

Route::resource('products', ProductController::class);


