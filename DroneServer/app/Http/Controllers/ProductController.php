<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use Validator;
use App\Http\Controllers\BaseController as BaseController;
class ProductController extends BaseController
{
    public function index()
    {      
      $maxResults = 5;    
      Product::jsonPaginate($maxResults);
      $products = Product::jsonPaginate($maxResults);
      return $this->sendResponse($products->toArray(), 'Products retrieved successfully.');
   
    }


   public function insert(Request $request)
   {         
   
     $input = $request->all();

     $validator = Validator::make($input, [
         'ten_san_pham' => 'required',
         'danh_muc_id' => 'required',
         'nha_cung_cap_id'=>'required',
         'don_gia'=>'required',
         'don_vi_ban'=>'required',
         'don_vi_ton_kho' =>'required',      
     ]);


     if($validator->fails()){
         return $this->sendError('Validation Error.', $validator->errors());       
     }

     $product = Product::create($input);


     return $this->sendResponse($product->toArray(), 'Product created successfully.');

   }

    public function update(Request $request, $id)
    {
       $product = new Product();
       $product = Product::findOrFail($id);
       $product->update($request->all());
       return response()->json($product, 200);    
      
    } 
    
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);


        if (is_null($product)) {
            return $this->sendError('Product not found.');
        }


        return $this->sendResponse($product->toArray(), 'Product retrieved successfully.');
    }

    public function delete($id)
    {
       $product = new Product();
       $product = Product::findOrFail($id);
       $product->delete();
       return response()->json(['sucess'=>'Product deleted sucessfully']);
      
    }   

    public function price($id)
    {
       $product = new Product();
       $product = Product::findOrFail($id);
       $prices = $product->don_gia*$product->sale;
       return response()->json( $prices);
      
    }  
}