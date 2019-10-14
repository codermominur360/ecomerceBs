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

Route::get('/dashboard', function () {
    return view('admin.category.create');
});
//Route::get('/',[
//    'uses'=>'NewShopController@index',
//    'as'=>'/'
//]);
Route::get('/','NewShopController@index');
Route::get('ctg_By_cont/{category_id}','NewShopController@categoryByContent');
Route::get('productDetails/{product_id}','NewShopController@productDetails');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('category','CategoryController');

Route::get('deactiveAction/{category_id}','CategoryController@deactiveAction');

/*
 * ---------------------------------------------------
 * todo:-    Product Controller all route here
 * ---------------------------------------------------
 * */
Route::resource('product','ProductController');




/*
 * ----------------------------------------------------
 *  todo:-   Brand Controller all route here .
 * -----------------------------------------------------
 * */
Route::resource('brand','BrandController');
Route::get('deactiveAction/{brand_id}','BrandController@deactiveAction');
Route::get('activeAction/{brand_id}','BrandController@activeAction');
Route::get('destroy/{brand_id}','BrandController@destroy');
