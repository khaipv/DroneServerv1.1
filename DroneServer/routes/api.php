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
Route::get("/product/page={page}&limit={size}","ProductController@index")->middleware('cors');
Route::get("/product={id}","ProductController@show")->middleware('cors');;
Route::get("/product/cata={id}&page={page}&limit={size}","ProductController@indexcata")->middleware('cors');;
Route::get("/productname/page={page}&limit={size}","ProductController@indexname")->middleware('cors');;
Route::get("/productid/page={page}&limit={size}","ProductController@indexid")->middleware('cors');;
Route::get("/productnamesort/page={page}&limit={size}","ProductController@indexnamesort")->middleware('cors');;
Route::get("/productpricessort/page={page}&limit={size}","ProductController@indexpricessortincre")->middleware('cors');;
Route::get("/productpricessortde/page={page}&limit={size}","ProductController@indexpricessortdeincre")->middleware('cors');;
Route::get("/product/sup={id}&page={page}&limit={size}","ProductController@indexsup")->middleware('cors');;
Route::get("/productin/page={page}&limit={size}","ProductController@indexpointsort")->middleware('cors');;
Route::get("/productde/page={page}&limit={size}","ProductController@indexpointsortde")->middleware('cors');;
Route::get("/productpoint1/page={page}&limit={size}","ProductController@indexpointsortde1")->middleware('cors');;
Route::get("/productpoint2/page={page}&limit={size}","ProductController@indexpointsortde2")->middleware('cors');;
Route::get("/store/page={page}&limit={size}","StoreController@indexid")->middleware('cors');;
Route::get("/catagoryid/page={page}&limit={size}","CatagoryController@indexid")->middleware('cors');;   
Route::get("/prices/{id}","ProductController@price")->middleware('cors');;  
Route::post('register', 'AuthController@register')->middleware('cors');;
Route::post('login', 'AuthController@login')->middleware('cors');;




Route::group(['middleware' => ['auth:api', 'admin','cors']], function() {
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
        Route::get('users/id={id}', 'UserController@getiduser');
         });


Route::group(['middleware' => ['auth:api','employee','cors']], function() {   
        Route::get('userscus/id={id}', 'UserController@getidkh');

        Route::get('userscus/page={page}&limit={size}', 'UserController@getidkh');
       
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


                     Route::group(['middleware' => ['auth:api','customer','cors']], function() {
                        Route::get('userssup/id={id}', 'UserController@getidncc'); 
                        Route::get('userssup/page={page}&limit={size}', 'UserController@getidncc');
                    
                        Route::get("/order/user={id}&page={page}&limit={size}","OrderController@indexuser");    
                        Route::get("/cart/page={page}&limit={size}","CartController@indexid");
                        Route::post("/cart","CartController@insert");
                        Route::post("/cartdetail","CartController@insertdetail");
                        Route::post("/cartdetail","CartController@insertdetail");
                        Route::put('/cart/{id}',"CartController@update");
                        Route::put('/cartdetail/{id}',"CartController@updatedetail");
                        Route::delete('/cart/{id}', "CartController@delete");
                        Route::delete('/cartdetail/{id}', "CartController@deletedetail");
                        Route::get("/cartdetail/{id}/page={page}&limit={size}","CartController@getdetailcart");
                        Route::get("/cartdetailid/{id}/page={page}&limit={size}","CartController@getdetailcartid");  
                        Route::get("/cartdetailid1/{id}/page={page}&limit={size}","CartController@getdetailcartid1"); 
                        Route::get("/productban/page={page}&limit={size}","ProductController@indexban");
                        Route::get("/productton/page={page}&limit={size}","ProductController@indexton");   
                        Route::post("/user","UserController@insert");
                        Route::put('/user/{id}',"UserController@update");
                        Route::delete('/user/{id}', "UserController@delete");
                        Route::post("/order","OrderController@insert");
                        Route::post("/orderdetail","OrderController@insertdetail");
                        Route::put("/order/{id}","OrderController@update");
                        Route::put("/orderdetail/{id}","OrderController@updatedetail");
                        Route::delete("/orderdetail/{id}","OrderController@deletedetail");
                        Route::get("/orderdetail/{id}/page={page}&limit={size}","OrderController@getdetailorder");
                        Route::post("/test","TestController@insert");
                        Route::get("/total/{id}","CartController@gettotal"); 
                                           });

                        Route::group(['middleware' => ['auth:api','employee'||'customer'||'admin','cors']], function() {    
                        Route::get('user', 'AuthController@user');
                        Route::get('logout', 'AuthController@logout');
                                                             });