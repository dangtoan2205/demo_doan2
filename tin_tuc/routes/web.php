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
    return view('welcome');
});
Route::get('mo-hinh-phat-trien',[
    'as'=>'mohinh',
    'uses'=>'PageController@getMohinh'
]);

Route::get('trang-chu',[
    'as'=>'trangchu',
    'uses'=>'PageController@getTrangchu'
]);

Route::get('giay-chung-nhan',[
    'as'=>'giaychungnhan',
    'uses'=>'PageController@getChunhnhan'
]);

Route::get('du-an',[
    'as'=>'duan',
    'uses'=>'PageController@getDuan'
]);

Route::get('nhan-xet',[
    'as'=>'nhanxet',
    'uses'=>'PageController@getNhanxet'
]);

Route::post('nhan-xet',[
    'as'=>'nhanxet',
    'uses'=>'PageController@postNhanxet'
]);

Route::get('danh-sach-tin',[
    'as'=>'danhsachtin',
    'uses'=>'PageController@getDanhsach'
]);


Route::get('cap-nhat-tin-tuc',[
    'as'=>'capnhattin',
    'uses'=>'PageController@getCapnhat'
]);

Route::post('cap-nhat-tin-tuc',[
    'as'=>'capnhattin',
    'uses'=>'PageController@postCapnhat'
]);








Route::get('ad-dang-nhap',[
	'as'=>'addangnhap',
	'uses'=>'PageController@getLogin'
]);

Route::get('ad-dang-ki',[
    'as'=>'addangki',
    'uses'=>'PageController@getSignin'
]);
Route::post('ad-dang-ki',[
    'as'=>'addangki',
    'uses'=>'PageController@postSignin'
]);
Route::post('ad-dang-nhap',[
	'as'=>'addangnhap',
	'uses'=>'PageController@postLogin'
]);
Route::get('dang-xuat',[
    'as'=>'logout',
    'uses'=>'PageController@postLogout'
]);

Route::get('del-cart/{id}',[
    'as'=>'xoatin',
    'uses'=>'PageController@getDelICart'
]);