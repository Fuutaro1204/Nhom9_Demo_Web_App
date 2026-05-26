<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Demo cho báo cáo - Không cần login thật
Route::get('/login', function () {
    return '<h1 style="text-align:center;margin-top:100px;color:green;">
            ✅ Trang Login Demo<br>
            <small>Bảo mật Web - Nhóm 9</small>
            </h1>';
});

Route::get('/register', function () {
    return '<h1 style="text-align:center;margin-top:100px;color:blue;">
            ✅ Trang Register Demo<br>
            <small>Bảo mật Web - Nhóm 9</small>
            </h1>';
});

Route::get('/dashboard', function () {
    return '<h1 style="text-align:center;margin-top:100px;color:purple;">
            Dashboard - Hệ thống đã triển khai thành công trên Azure
            </h1>';
});
