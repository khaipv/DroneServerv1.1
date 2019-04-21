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
Route::get("/product/page={page}&limit={size}","ProductController@index");
Route::get("/product={id}","ProductController@show");
Route::get("/product/cata={id}&page={page}&limit={size}","ProductController@indexcata");
Route::get("/productname/page={page}&limit={size}","ProductController@indexname");
Route::get("/productid/page={page}&limit={size}","ProductController@indexid");
Route::get("/productnamesort/page={page}&limit={size}","ProductController@indexnamesort");
Route::get("/productpricessort/page={page}&limit={size}","ProductController@indexpricessortincre");
Route::get("/productpricessortde/page={page}&limit={size}","ProductController@indexpricessortdeincre");
Route::get("/product/sup={id}&page={page}&limit={size}","ProductController@indexsup");
Route::get("/store/page={page}&limit={size}","StoreController@indexid");
Route::get("/catagoryid/page={page}&limit={size}","CatagoryController@indexid");   
Route::get("/prices/{id}","ProductController@price");  
Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');

  

Route::group(['middleware' => ['auth:api', 'admin']], function() {
       
        Route::get('user', 'AuthController@user');
        Route::get('user&role={id}&page={page}&limit={size}', 'UserController@indexrole');
        Route::get('logout', 'AuthController@logout');
        Route::post("/product","ProductController@insert");
        Route::put('/product/{id}',"ProductController@update");
        Route::delete('/product/{id}', "ProductController@delete");  
        Route::post("/store","StoreController@insert");
        Route::put('/store/{id}',"StoreController@update");
        Route::delete('/store/{id}', "StoreController@delete");
        Route::get("/role/page={page}&limit={size}","RoleController@index");
        Route::post("/role","RoleController@insert");
        Route::put('/role/{id}',"RoleController@update");
        Route::delete('/role/{id}', "RoleController@delete");
        Route::post("/catagory","CatagoryController@insert");
        Route::put('/catagory/{id}',"CatagoryController@update");
        Route::delete('/catagory/{id}', "CatagoryController@delete");
        Route::get('users/page={page}&limit={size}', 'UserController@index');
         });


Route::group(['middleware' => ['auth:api','employee']], function() {    
        Route::get("/catagory/page={page}&limit={size}","CatagoryController@index"); 
        Route::get("/order/user={id}&page={page}&limit={size}","OrderController@indexuser");
        Route::get("/order/date={date}&page={page}&limit={size}","OrderController@indexdateorder");
        Route::get("/order/datere={date}&page={page}&limit={size}","OrderController@indexreci");
        Route::get('userid', 'UserController@indexwithoutid');
        Route::get('user1', 'UserController@indexwithoutpass');
        Route::get('user2', 'UserController@indexwithoutemail');
        Route::get('user3', 'UserController@indexwithout2');
        Route::get('user4', 'UserController@indexwithout3');
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
        Route::post("/test","TestController@insert");
        Route::get("/roleid/page={page}&limit={size}","RoleController@indexid");
        Route::get("/orderdetail/{id}/page={page}&limit={size}","OrderController@getdetailorder");
        Route::put('/test/{id}',"TestController@update");
        Route::delete('/test/{id}', "TestController@delete");
        Route::get("/testdetail/page={page}&limit={size}","TestController@gettestdetail");
        Route::post("/testdetail","TestController@insertdetail");
        Route::put('/testdetail/{id}',"TestController@updatedetail");
        Route::delete('/testdetail/{id}', "TestController@deletedetail");
        Route::get("/orderwithoutid/page={page}&limit={size}","OrderController@indexwithouid");   
        Route::get("/ordersortdatere/page={page}&limit={size}","OrderController@indexsortbydatere"); 
        Route::get("/ordersortdateor/page={page}&limit={size}","OrderController@indexsortbydateor");
        Route::get("/ordersortdatere1/page={page}&limit={size}","OrderController@indexsortbydatere1"); 
        Route::get("/ordersortdateor1/page={page}&limit={size}","OrderController@indexsortbydateor1");           
        Route::get("/order/page={page}&limit={size}","OrderController@index");   
        Route::get("/storef/page={page}&limit={size}","StoreController@index");
        Route::get("/cartf/page={page}&limit={size}","CartController@index");
                     });

Route::group(['middleware' => ['auth:api','customer']], function() {
        Route::get("/order/user={id}&page={page}&limit={size}","OrderController@indexuser");
        Route::get('user', 'AuthController@user');
        Route::get('logout', 'AuthController@logout');
        Route::get("/cart/page={page}&limit={size}","CartController@indexid");
        Route::post("/cart","CartController@insert");
        Route::put('/cart/{id}',"CartController@update");
        Route::delete('/cart/{id}', "CartController@delete");
        Route::get("/cartdetail/{id}/page={page}&limit={size}","CartController@getdetailcart");
        Route::get("/cartdetailid/{id}/page={page}&limit={size}","CartController@getdetailcartid");  
        Route::get("/cartdetailid1/{id}/page={page}&limit={size}","CartController@getdetailcartid1"); 
        Route::get("/productban/page={page}&limit={size}","ProductController@indexban");
        Route::get("/productton/page={page}&limit={size}","ProductController@indexton");   
        Route::post("/user","UserController@insert");
        Route::put('/user/{id}',"UserController@update");
        Route::delete('/user/{id}', "UserController@delete");
        Route::post("/order","OrderController@insert");
        Route::put("/order/{id}","OrderController@update");
        Route::get("/orderdetail/{id}/page={page}&limit={size}","OrderController@getdetailorder");
        Route::post("/test","TestController@insert");
        Route::get("/total/{id}","CartController@gettotal"); 
                           });