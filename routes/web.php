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

Route::get('/', 'Yakuzen@index')->name('homepage');

Route::get('/lien-he', 'Yakuzen@contact');

Route::get('/kien-thuc-mat-ngu', 'Yakuzen@news');

Route::get('/tu-van', 'Yakuzen@qa');

Route::get('/bai-viet/{params}', 'Yakuzen@apost');

Route::post('/dang-ky', 'Yakuzen@registration');

Route::get('/gioi-thieu-san-pham', 'Yakuzen@product');

Route::get('/admin', 'Admin@index')->middleware('auth');

Route::post('/save-config', 'Admin@saveConfig');

Route::namespace('Admin')->group(function () {
    Route::get('/admin/danh-sach-dang-ky', 'Registration@index')->middleware('auth');
    Route::post('/admin/danh-sach-dang-ky/ds', 'Registration@list')->middleware('auth');
    Route::post('/admin/danh-sach-dang-ky/xu-ly', 'Registration@mark')->middleware('auth');

    Route::get('/admin/phan-hoi-khach-hang/ds', 'Quote@index')->middleware('auth');
    Route::post('/admin/phan-hoi-khach-hang/danh-sach', 'Quote@list')->middleware('auth');
    Route::post('/admin/phan-hoi-khach-hang/xoa', 'Quote@del')->middleware('auth');
    Route::get('/admin/phan-hoi-khach-hang/them-moi', 'Quote@create')->name('feedback-create')->middleware('auth');
    Route::post('/admin/phan-hoi-khach-hang/luu-lai', 'Quote@save')->name('feedback-save')->middleware('auth');

    Route::get('/admin/tin-tuc/ds', 'Newsc@index')->middleware('auth');
    Route::get('/admin/tin-tuc/them-moi', 'Newsc@create')->name('news-create')->middleware('auth');
    Route::post('/admin/tin-tuc/luu-lai', 'Newsc@save')->name('news-save');
    Route::post('/admin/tin-tuc/danh-sach', 'Newsc@list')->middleware('auth');
    Route::post('/admin/tin-tuc/xoa', 'Newsc@del')->middleware('auth');
    Route::post('/admin/tin-tuc/chi-tiet', 'Newsc@detail')->middleware('auth');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
