<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Demo cho báo cáo
Route::get('/login-demo', function () {
    return view('auth.login');        // dùng giao diện Breeze có sẵn
});

Route::get('/register-demo', function () {
    return view('auth.register');
});

Route::get('/dashboard-demo', function () {
    return '<h1 style="text-align: center; margin-top: 100px; color: green; font-size: 32px;">
            🎉 Dashboard - Hệ thống đã được triển khai thành công trên Azure<br>
            <small>Bảo mật Web - Nhóm 9</small>
            </h1>';
});
