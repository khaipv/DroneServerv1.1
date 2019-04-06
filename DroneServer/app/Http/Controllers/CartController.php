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
       return $this->sendResponse($result, 'Carts retrieved successfully.'); 
    }

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
    public function update(Request $request, $id)
    {
       $cart = new Cart();
       $cart = Cart::findOrFail($id);
       $cart->update($request->all());

       return response()->json($cart, 200);    
      
    } 
    
    public function delete($id)
    {
       $cart = new Cart();
       $cart = Cart::findOrFail($id);
       $cart->delete();
       return response()->json(['sucess'=>'Cart deleted sucessfully']);
      
    } 
    
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
  return $this->sendResponse($result, 'CartDetails retrieved successfully.');   
   
    }

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
    return response()->json(['totals'=>$totals], 200); 
     } 

}