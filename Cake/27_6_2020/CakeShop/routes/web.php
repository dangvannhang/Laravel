<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('page.trangchu');
});
Route::get('trang-chu', [
    'as'=>'trangchu',
    'uses'=> 'PageController@getSlide'
]);

Route::get('loai-san-pham/{type}',[
    'as'=> 'loaisanpham',
    'uses'=> 'PageController@getLoaiSP'
]);
Route::get('gioi-thieu',[
    'as'=>'gioithieu',
    'uses'=>'PageController@getGioiThieu'
]);
Route::get('lien-he',[
    'as'=>'lienhe',
    'uses'=>'PageController@getLienHe'
]);
Route::get('chi-tiet-san-pham/{id}',[
    'as'=>'chitietsanpham',
    'uses'=>'PageController@getChiTiet'
]);
Route::get('add-to-cart/{id}',[
    'as'=>'themgiohang',
    'uses'=>'PageController@getAddToCart'
]);
Route::get('delet-cart/{id}',[
    'as'=>'xoagiohang',
    'uses'=>'PageController@getDeleteCart'
]);

Route::get('dat-hang',[
    'as'=>'dathang',
    'uses'=>'PageController@getDatHang'
]);
Route::post('dat-hang',[
    'as'=>'dathang',
    'uses'=>'PageController@postDatHang'
]);
Route::get('dang-nhap',[
    'as'=>'dangnhap',
    'uses'=>'PageController@getDangNhap'
]);

Route::get('dang-ki',[
    'as'=>'dangki',
    'uses'=>'PageController@getDangKi'
]);
Route::post('dang-ki',[
    'as'=>'dangki',
    'uses'=>'PageController@postDangKi'
]);
