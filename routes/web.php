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

Route::get('/', 'HomeController@index');

Route::get('/product/{id}', 'HomeController@product');

Route::get('/product_detail/{id}', 'HomeController@product_detail');



Route::get('/admin', function()
{
    return view('la.dashboard.index');
});

Route::resource('/admin/category', 'Admin\CategoryController');

Route::resource('/admin/product', 'Admin\ProductController');

Route::get('/clear', function () {
    Artisan::call('config:cache');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return '<h3>Cleared Cache Data!</h3>';
});
