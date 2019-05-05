<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Cart;
use App\Model\CartDetail;
use App\Model\Product;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
class CartController extends BaseController
{
    /**
     * Get list cart 
     * @bodyParam $page int page in 
     * @bodyParam $limit int size page 
     * @response {
     * "success": true,
     * "data": {
     * "total": 1,
     * "page": 1,
     * "pageSize": "1",
     * "data": [
     *       {
     *           "id": 1 ,
     *           "ma_nguoi_dung": 1
     *       } 
     *   ]
     * },
     * "message": "Carts retrieved successfully."
     * }
     * @response 404 {
     *  "message": "Cart get error."
     * }
       * @response 401{
     * 
     * "message":"Unauthorized."
     * 
     * } 
      * @response 403{
     * 
     * "message":"Forbidden."
     * 
     * }    
     */

   public function index($page,$limit)
      {      
          Paginator::currentPageResolver(function() use ($page) {
              return $page;
          });
       $carts = Cart::paginate($limit);
       $cart = $carts->toArray();
       $result['total'] = $carts->total();
       $result['page'] = $carts->currentPage();
       $result['pageSize'] = $carts->perPage();
       $result['data']=$cart['data'];
       if( $result['data']==!null)
       {
       return $this->sendResponse($result, 'Carts retrieved successfully.');
       }
       else
       {
         return response()->json(['message'=>'Cart get error.']);
       } 
    }

/**
     * Get list cart without id
     * @bodyParam $page int page in 
     * @bodyParam $limit int size page 
     * @response {
     * "success": true,
     * "data": {
     * "total": 1,
     * "page": 1,
     * "pageSize": "1",
     * "data": [
     *       {
     *           "ma_nguoi_dung": 1
     *       } 
     *   ]
     * },
     * "message": "Carts retrieved successfully."
     * }
     * @response 404 {
     *  "message": "Cart get error."
     * }
       * @response 401{
     * 
     * "message":"Unauthorized."
     * 
     * } 
      * @response 403{
     * 
     * "message":"Forbidden."
     * 
     * }    
     */

    public function indexid($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $carts = Cart::paginate($limit);
     $cart1 = $carts->getCollection();
     $count = count( $cart1);
     $cart1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['ma_nguoi_dung']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$cart1;
     if( $result['data']==!null)
     {
     return $this->sendResponse($result, 'Carts retrieved successfully.');
     }
     else
     {
       return response()->json(['message'=>'Cart get error.']);
     } 
  }






 /**
     * Add new cart 
     * @bodyParam $request Request infomation of cart added(ma_nguoi_dung)
     * @response {
     *  "success": true,
     *   "data": {
     *   "ma_nguoi_dung": "4",
     *   "id": 4
     * },
     *  "message": "Cart created successfully."
     * }
     * @response 404 {
     *  "message": "Validation Error."
     * }
       * @response 401{
     * 
     * "message":"Unauthorized."
     * 
     * } 
      * @response 403{
     * 
     * "message":"Forbidden."
     * 
     * }    
     */
    public function insert(Request $request)
    {         
      $input = $request->all();
 
      $validator = Validator::make($input, [
          'ma_nguoi_dung' => 'required',
             
      ]);
 
      if($validator->fails()){
          return $this->sendError('Validation Error.', $validator->errors());       
      }
 
      $cart = Cart::create($input);
 
      return $this->sendResponse($cart->toArray(), 'Cart created successfully.');
    }


    
     /**
     * Update old cart 
     * @bodyParam $request Request infomation update(ma_nguoi_dung)
     * @bodyParam $id bigInt id-cart to update
     * @response {
     *  "message": "Cart updated sucessfully."
     * }
     * @response 404 {
     *  "message": "Cart updated error."
     * }
       * @response 401{
     * 
     * "message":"Unauthorized."
     * 
     * } 
      * @response 403{
     * 
     * "message":"Forbidden."
     * 
     * }    
     */

    public function update(Request $request, $id)
    {
       $cart = new Cart();
       $cart = Cart::findOrFail($id);
       if($cart->update($request->all()))
       {
         return response()->json(['message'=>'Cart updated sucessfully.']);
       }
       else
       {
         return response()->json(['message'=>'Cart updated error.']);
       }
      
    } 

    /**
     * Update old cart-detail 
     * @bodyParam $request Request infomation update(ma_nguoi_dung)
     * @bodyParam $id bigInt id-cart to update
     * @response {
     *  "message": "Cart-detail updated sucessfully."
     * }
     * @response 404 {
     *  "message": "Cart-detail updated error."
     * }
       * @response 401{
     * 
     * "message":"Unauthorized."
     * 
     * } 
      * @response 403{
     * 
     * "message":"Forbidden."
     * 
     * }    
     */

    public function updatedetail(Request $request, $id)
    {
       $cart = new CartDetail();
       $cart = CartDetail::findOrFail($id);
       if($cart->update($request->all()))
       {
         return response()->json(['message'=>'Cart-detail updated sucessfully.']);
       }
       else
       {
         return response()->json(['message'=>'Cart-detail updated error.']);
       }
    }
     /**
     * Delete cart with id
     * @bodyParam $id bigInt id cart to delete
     * @response {
     *  "message": "Cart deleted sucessfully."
     * }
     * @response 404 {
     *  "message": "Cart deleted error."
     * }
       * @response 401{
     * 
     * "message":"Unauthorized."
     * 
     * } 
      * @response 403{
     * 
     * "message":"Forbidden."
     * 
     * }    
     */
    public function delete($id)
    {
       $cart = new Cart();
       $cart = Cart::findOrFail($id);
       $cartdetail= CartDetail::where('gio_hang_id',$id);
       if(($cartdetail->delete())&&($cart->delete()))
       {
         return response()->json(['message'=>'Cart deleted sucessfully.']);
       }
       else
       {
       return response()->json(['message'=>'Cart deleted error.']);
       }
    } 

     /**
     * Delete cart-detail with id
     * @bodyParam $id bigInt id cart to delete
     * @response {
     *  "message": "Cart-detail deleted sucessfully."
     * }
     * @response 404 {
     *  "message": "Cart-detail deleted error."
     * }
       * @response 401{
     * 
     * "message":"Unauthorized."
     * 
     * } 
      * @response 403{
     * 
     * "message":"Forbidden."
     * 
     * }    
     */
    public function deletedetail($id)
    {
       $cart = new CartDetail();
       $cart = CartDetail::findOrFail($id); 
       if(($cart->delete()))
       {
         return response()->json(['message'=>'Cart-detail deleted sucessfully.']);
       }
       else
       {
       return response()->json(['message'=>'Cart-detail deleted error.']);
       }
    } 
     /**
     * Get detail-cart 
     * @bodyParam $id bigInt id-cart when want to get detail
     * @bodyParam $page int page in 
     * @bodyParam $limit int size page 
     * @response {
     * "success": true,
     * "data": {
     *   "total": 3,
     *   "page": 1,
     *   "pageSize": "2",
     *   "data": [
     *       {
     *           "id": 1,
     *           "so_luong": 2,
     *           "san_pham_id": 1,
     *           "gio_hang_id": 1
     *       },
     *       {
     *           "id": 2,
     *           "so_luong": 3,
     *           "san_pham_id": 2,
     *           "gio_hang_id": 1
     *       }
     *   ]
     * },
     * "message": "CartDetails retrieved successfully."
     * }
     * @response 404 {
     *  "message": "CartCartDetail get error."
     * }
       * @response 401{
     * 
     * "message":"Unauthorized."
     * 
     * } 
      * @response 403{
     * 
     * "message":"Forbidden."
     * 
     * }    
     */

    public function getdetailcart($id,$page,$limit)
    {     
      Paginator::currentPageResolver(function() use ($page) {
         return $page;
     });
      $cartdetail= CartDetail::where('gio_hang_id',$id)->paginate($limit);
      $cart = $cartdetail->toArray();
      $result['total'] = $cartdetail->total();
      $result['page'] = $cartdetail->currentPage();
      $result['pageSize'] = $cartdetail->perPage();
      $result['data']=$cart['data'];
      if( $result['data']==!null)
      {
      return $this->sendResponse($result, 'CartDetails retrieved successfully.');
      }
      else
      {
        return response()->json(['message'=>'CartCartDetail get error.']);
      }  
   
    }

/**
     * Get detail-cart wihtout id
     * @bodyParam $id bigInt id-cart when want to get detail
     * @bodyParam $page int page in 
     * @bodyParam $limit int size page 
     * @response {
     * "success": true,
     * "data": {
     *   "total": 3,
     *   "page": 1,
     *   "pageSize": "2",
     *   "data": [
     *       {
     *           "so_luong": 2,
     *           "san_pham_id": 1,
     *           "gio_hang_id": 1
     *       },
     *       {
     *           "so_luong": 3,
     *           "san_pham_id": 2,
     *           "gio_hang_id": 1
     *       }
     *   ]
     * },
     * "message": "CartDetails retrieved successfully."
     * }
     * @response 404 {
     *  "message": "CartCartDetail get error."
     * }
       * @response 401{
     * 
     * "message":"Unauthorized."
     * 
     * } 
      * @response 403{
     * 
     * "message":"Forbidden."
     * 
     * }    
     */

    public function getdetailcartid($id,$page,$limit)
    {     
      Paginator::currentPageResolver(function() use ($page) {
         return $page;
     });
      $cartdetail= CartDetail::where('gio_hang_id',$id)->paginate($limit);
      $cartdetail1 = $cartdetail->getCollection();
      $count = count( $cartdetail1);
      $cartdetail1->each(function ($item) {
         $item->setHidden(['id'])->setVisible(['so_luong','gio_hang_id','san_pham_id']);
     }); 
      $result['total'] = $count;
      $result['page'] = $page;
      $result['pageSize'] = $limit;
      $result['data']=$cartdetail1;
      if( $result['data']==!null)
      {
      return $this->sendResponse($result, 'CartDetails retrieved successfully.');
      }
      else
      {
        return response()->json(['message'=>'CartCartDetail get error.']);
      }  
   
    }



    /**
     * Add new cart-detail 
     * @bodyParam $request Request infomation of cart added(ma_nguoi_dung)
     * @response {
     *  "success": true,
     *   "data":"..."
     * },
     *  "message": "CartDetail created successfully."
     * }
     * @response 404 {
     *  "message": "Validation Error."
     * }
       * @response 401{
     * 
     * "message":"Unauthorized."
     * 
     * } 
      * @response 403{
     * 
     * "message":"Forbidden."
     * 
     * }    
     */
    public function insertdetail(Request $request)
    {         
      $input = $request->all();
 
      $validator = Validator::make($input, [
          'so_luong' => 'required',
          'san_pham_id' => 'required',
          'gio_hang_id' => 'required',
          
      ]);
 
      if($validator->fails()){
          return $this->sendError('Validation Error.', $validator->errors());       
      }
 
      $cart = CartDetail::create($input);
 
      return $this->sendResponse($cart->toArray(), 'CartDetail created successfully.');
    }

    
/**
     * Get detail-cart wihtout id (gio_hang_id)
     * @bodyParam $id bigInt id-cart when want to get detail
     * @bodyParam $page int page in 
     * @bodyParam $limit int size page 
     * @response {
     * "success": true,
     * "data": {
     *   "total": 3,
     *   "page": 1,
     *   "pageSize": "2",
     *   "data": [
     *       {
     *           "so_luong": 2,
     *           "san_pham_id": 1     
     *       },
     *       {
     *           "so_luong": 3,
     *           "san_pham_id": 2
     *       }
     *   ]
     * },
     * "message": "CartDetails retrieved successfully."
     * }
     * @response 404 {
     *  "message": "CartCartDetail get error."
     * }
       * @response 401{
     * 
     * "message":"Unauthorized."
     * 
     * } 
      * @response 403{
     * 
     * "message":"Forbidden."
     * 
     * }    
     */

    public function getdetailcartid1($id,$page,$limit)
    {     
      Paginator::currentPageResolver(function() use ($page) {
         return $page;
     });
      $cartdetail= CartDetail::where('gio_hang_id',$id)->paginate($limit);
      $cartdetail1 = $cartdetail->getCollection();
      $count = count( $cartdetail1);
      $cartdetail1->each(function ($item) {
         $item->setHidden(['id','gio_hang_id'])->setVisible(['so_luong','san_pham_id']);
     }); 
      $result['total'] = $count;
      $result['page'] = $page;
      $result['pageSize'] = $limit;
      $result['data']=$cartdetail1;
      if( $result['data']==!null)
      {
      return $this->sendResponse($result, 'CartDetails retrieved successfully.');
      }
      else
      {
        return response()->json(['message'=>'CartCartDetail get error.']);
      }  
   
    }


     /**
     * Get total-money 
     * @bodyParam $id bigInt cart want to get total
     * @response {
     *  "total": "....."
     * }
     */

     public function gettotal($id)
     {
      $cartdetails = new CartDetail();
      $cartdetails = CartDetail::where('gio_hang_id',$id)->get();     

        $totals =0;
        foreach($cartdetails as $cartdetail)
       { 
          $product = new Product();
          $product = Product::findOrFail($cartdetail->id);
          $totals +=  ($cartdetail->so_luong)*($product->don_gia)*($product->sale);
       }
           return response()->json(['totals'=>$totals]); 
      }
    }
       
      
    
