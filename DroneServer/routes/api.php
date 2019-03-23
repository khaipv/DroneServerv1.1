<?php

use Illuminate\Http\Request;



use GuzzleHttp\Middleware;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();



// });
//product
Route::get("/product","ProductController@index");

Route::get("/store","StoreController@index");

Route::get("/catagory","CatagoryController@index");
//cart    

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
  
Route::group(['middleware' => ['auth:api', 'admin']], function() {
       
        Route::get('user', 'AuthController@user');
        Route::get('logout', 'AuthController@logout');
        Route::post("/product","ProductController@insert");
        Route::put('/product/{id}',"ProductController@update");
        Route::delete('/product/{id}', "ProductController@delete");  
        Route::post("/store","StoreController@insert");
        Route::put('/store/{id}',"StoreController@update");
        Route::delete('/store/{id}', "StoreController@delete");
        Route::get("/role","RoleController@index");
        Route::post("/role","RoleController@insert");
        Route::put('/role/{id}',"RoleController@update");
        Route::delete('/role/{id}', "RoleController@delete");
        Route::post("/catagory","CatagoryController@insert");
        Route::put('/catagory/{id}',"CatagoryController@update");
        Route::delete('/catagory/{id}', "CatagoryController@delete");
        Route::get('users', 'UserController@index');
         });

Route::group(['middleware' => ['auth:api','customer']], function() {
        Route::get('user', 'AuthController@user');
        Route::get('logout', 'AuthController@logout');
        Route::get("/cart","CartController@index");
        Route::post("/cart","CartController@insert");
        Route::put('/cart/{id}',"CartController@update");
        Route::delete('/cart/{id}', "CartController@delete");
        Route::get("/cartdetail/{id}","CartController@getdetailcart");  
        Route::post("/user","UserController@insert");
        Route::put('/user/{id}',"UserController@update");
        Route::delete('/user/{id}', "UserController@delete");
        Route::post("/order","OrderController@index");
        Route::put("/order","OrderController@update");
        Route::delete("/order/{id}","OrderController@delete");
        Route::get("/orderdetail/{id}","OrderController@getdetailorder");
           });

Route::group(['middleware' => ['auth:api','employee']], function() {
        Route::get("/order","OrderController@index");
        Route::get('user', 'AuthController@user');
        Route::post("/product","ProductController@insert");
        Route::put('/product/{id}',"ProductController@update");            
        Route::get('logout', 'AuthController@logout');
        Route::delete('/product/{id}', "ProductController@delete");
        Route::post("/store","StoreController@insert");
        Route::put('/store/{id}',"StoreController@update");
        Route::delete('/store/{id}', "StoreController@delete");
        Route::post("/catagory","CatagoryController@insert");
        Route::put('/catagory/{id}',"CatagoryController@update");
        Route::delete('/catagory/{id}', "CatagoryController@delete");
        Route::delete("/order/{id}","OrderController@delete");
  
             });
