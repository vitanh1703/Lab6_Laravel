<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'list']);

Route::get('/lienhe', function () {
    return view('lienhe');
});

Route::get('/bang-cuu-chuong/{n}', [HomeController::class, 'multiplication']);

Route::get('/about', function () {
    return "Họ tên: Diêm Việt Anh - Lớp: D18CNPM2 - MSSV: 23810310083";
});

Route::get('/contact', function () {
    return view('contact'); 
});

Route::get('/tong/{a}/{b}', function ($a, $b) {
    $tong = $a + $b;
    return "Tổng của $a và $b là: $tong";
});

Route::get('/sinh-vien/{name}/{age?}', function ($name, $age = 20) {
    return "Sinh viên: $name - Tuổi: $age";
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Chào mừng Admin";
    });

    Route::get('/users', function () {
        return "Danh sách người dùng";
    });
});

Route::get('/check-date/{day}/{month}/{year}', function ($day, $month, $year) {
    return "Ngày tháng năm hợp lệ: $day/$month/$year";
})->where([
    'day'   => '[1-9]|[12][0-9]|3[01]', 
    'month' => '[1-9]|1[0-2]',        
    'year'  => '[0-9]{4}'              
]);