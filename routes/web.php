<?php

use Illuminate\Support\Facades\Route;
// use Auth;

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

//
Auth::routes();

Route::get('/about' , 'HomeController@about');

//Route::middleware(['verifyisadmin'])->group(function(){

//route Admin
Route::get('/index','Admin\AdminController@index')->name('index');

// Types
Route::get('/TypesForm','Admin\TypesController@index')->name('typesform');
Route::post('/Types/Create','Admin\TypesController@create');
Route::get('/AddTypes','Admin\TypesController@addtypes')->name('addtypes');
Route::get('/EditTypes/{id}','Admin\TypesController@edittypes');
Route::post('/UpdateTypes/{id}','Admin\TypesController@updatetypes');
Route::get('/DeleteTypes/{id}','Admin\TypesController@del');

// Products
Route::get('/admin/products/index','Admin\ProductsController@index')->name('productsform');
Route::post('/Products/Create','Admin\ProductsController@create');
Route::get('admin/products/editproducts/edit/{id}','Admin\ProductsController@edit');
Route::get('/Addproducts','Admin\ProductsController@addproducts')->name('addproducts');
Route::get('/Editproducts','Admin\ProductsController@editproducts')->name('editproducts');
Route::post('/Products/update/{id}','Admin\ProductsController@update')->name('product.update');
Route::get('admin/products/editproducts/delete/{id}','Admin\ProductsController@delete');






// user
Route::get('/admin/specialcontents/index','Admin\specialcontentsController@index')->name('specialcontents');
Route::get('/Addspecialcontents','Admin\specialcontentsController@addspecialcontents')->name('addspecialcontents');
Route::get('/Editspecialcontents/{id}','Admin\specialcontentsController@editspecialcontents');
Route::post('/Updatespecialcontents/{id}','Admin\specialcontentsController@updatespecialcontents');
Route::get('/Deletespecialcontents/{id}','Admin\specialcontentsController@deletespecialcontents');

Route::get('/home','HomeController@index')->name('home');

// });
