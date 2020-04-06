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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','EcommerceController@index');
Route::get('/product-category/{id}','EcommerceController@category');
Route::get('/product-details/{id}','EcommerceController@productDetails');
Route::get('/category','EcommerceController@category');
Route::get('/login','adminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-category','categoryController@addCategory');
Route::post('/new-category','categoryController@saveCategoryInfo');
Route::get('/manage-category','categoryController@manageCategoryInfo');
Route::get('/unpublished-category/{id}','categoryController@unpublishedCategoryInfo');
Route::get('/published-category/{id}','categoryController@publishedCategoryInfo');
Route::get('/edit-category/{id}','categoryController@editCategoryCategoryInfo');
Route::post('/update-category','categoryController@updateCategoryInfo');
Route::get('/delete-category/{id}','categoryController@deleteCategoryInfo');

Route::get('/add-brand','BrandController@addBrand');
Route::post('/new-brand/','BrandController@saveBrandInfo');
Route::get('/manage-brand','BrandController@manageBrandInfo');


Route::get('/add-product','ProductController@addProduct');
Route::post('/new-product','ProductController@saveProductInfo');
Route::get('/manage-product','ProductController@manageProductInfo');
Route::get('/view-product/{id}','ProductController@viewProductInfo');
Route::get('/edit-product/{id}','ProductController@editProductInfo');
Route::post('/update-product','ProductController@updateProductInfo');



