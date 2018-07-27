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

Route::post('/test', 'Admin@test')->name('test');

Route::namespace('Admin')->group(function () {
    Route::get('/admin/danh-sach-dang-ky', 'Registration@index');
    Route::post('/admin/danh-sach-dang-ky/ds', 'Registration@list');
    Route::post('/admin/danh-sach-dang-ky/xu-ly', 'Registration@mark');

    Route::get('/admin/phan-hoi-khach-hang/ds', 'Quote@index');
    Route::post('/admin/phan-hoi-khach-hang/danh-sach', 'Quote@list');
    Route::post('/admin/phan-hoi-khach-hang/xoa', 'Quote@del');

    Route::get('/admin/phan-hoi-khach-hang/them-moi', 'Quote@create')->name('feedback-create');
    Route::post('/admin/phan-hoi-khach-hang/luu-lai', 'Quote@save')->name('feedback-save');
});
