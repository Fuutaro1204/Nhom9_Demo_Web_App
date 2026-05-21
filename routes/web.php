<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ==================== DEMO CHO BÁO CÁO ====================
Route::get('/login-test', function () {
    return '<h1 style="text-align:center; margin-top:100px; color:green;">
            ✅ Trang Login Demo - Bảo mật Web Nhóm 9
            </h1>';
});

Route::get('/register-test', function () {
    return '<h1 style="text-align:center; margin-top:100px; color:blue;">
            ✅ Trang Register Demo - Bảo mật Web Nhóm 9
            </h1>';
});

Route::get('/dashboard', function () {
    return '<h1 style="text-align:center; margin-top:100px; color:purple;">
            Dashboard - Hệ thống đã được Hardening
            </h1>';
});
// ========================================================