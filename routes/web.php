<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Yakuzen@index');

Route::get('/lien-he', 'Yakuzen@contact');

Route::get('/kien-thuc-mat-ngu', 'Yakuzen@news');

Route::post('/dang-ky', 'Yakuzen@registration');

Route::get('/admin', 'Admin@index');

Route::post('/save-config', 'Admin@saveConfig');

Route::namespace('Admin')->group(function () {
    Route::get('/admin/danh-sach-dang-ky', 'Registration@index');
    Route::post('/admin/danh-sach-dang-ky/ds', 'Registration@list');
    Route::post('/admin/danh-sach-dang-ky/xu-ly', 'Registration@mark');
});
