<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use Validator;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\BaseController as BaseController;
class ProductController extends BaseController
{
      
   /**
     * Get product 
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Products retrieved successfully."
     * }
     * @response {
     * 
     * "message":"Product get error."
     * 
     * }
     */
    public function index($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $products = Product::paginate($limit);
     $product = $products->toArray();
     $result['total'] = $products->total();
   //  $result['page'] = $products->currentPage();
     $result['page'] = $page;
     $result['pageSize'] = $products->perPage();
     $result['data']=$product['data'];
     if($result['data']==!null)
     {
       
        return $this->sendResponse($result, 'Products retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Product get error.']);
    }
   
    }

      
   /**
     * Get product with catagory
     * @bodyParam $id bigInt id catagory 
     * @bodyParam $page int page
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Products retrieved successfully." 
     * }
     * @response 404 
     * {
     *  "message": "Product get error."
     * }
     */

    public function indexcata($id,$page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });

     $products = Product::where('danh_muc_id',$id)->paginate($limit);
     $product = $products->toArray();
     $result['total'] = $products->total();
     $result['page'] = $products->currentPage();
     $result['pageSize'] = $products->perPage();
     $result['data']=$product['data'];
     if($result['data']==!null)
     {
       
        return $this->sendResponse($result, 'Products retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Product get error.']);
    }
    }

      
   /**
     * Register 
     * @bodyParam $id bigInt id sup
     * @bodyParam $page int page in
     * @bodyParam $limit int pagesize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Products retrieved successfully." 
     * }
     * @response 404 
     * {
     *  "message": "Product get error."
     * } 
     */

    public function indexsup($id,$page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $products = Product::where('nha_cung_cap_id',$id)->paginate($limit); 
     $product = $products->toArray();
     $result['total'] = $products->total();
     $result['page'] = $products->currentPage();
     $result['pageSize'] = $products->perPage();
     $result['data']=$product['data'];
     if($result['data']==!null)
     {
       
        return $this->sendResponse($result, 'Products retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Product get error']);
    }
   
    }
  
 /**
     * Register 
     * @bodyParam $id bigInt id sup
     * @bodyParam $page int page in
     * @bodyParam $limit int pagesize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Products retrieved successfully." 
     * }
     * @response 404 
     * {
     *  "message": "Product get error."
     * } 
     */




   /**
     * Add new product 
     * @bodyParam $request Request information of product add(ten_danh_muc,danh_muc_id,nha_cung_cap_id,don_gia,don_vi_ban,don_vi_ton_kho)
     * @response {
     * "message": "Product created successfully."
     * }
     * @response 404{
     * "message":"Validation Error." 
     * }
     */

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

     
   /**
     * Update old product
     * @bodyParam $id int id of product update
     * @bodyParam $request Request (infomation of product want to update) 
     * @response 
     * {
     * "message":"Product updated sucessfully."
     * }
     * @response 404
     * {
     * "message": "Product updated error."
     * }
     */

    public function update(Request $request, $id)
    {
       $product = new Product();
       $product = Product::findOrFail($id);
       if($product->update($request->all()))
       {
        return response()->json(['sucess'=>'Product updated sucessfully.']);
       }
       else
       {
           return response()->json(['sucess'=>'Product updated error.']);
       }
      
    } 
    
    
    /**
     * Display the product resource.
     * @bodyParam $id int
     * @response 
     * {
     * "sucess":true
     * "data":"..."
     * "message":"Product retrieved successfully."
     * }
     * @response 404
     * {
     * "message":"Product not found."
     * }
     */
    public function show($id)
    {
        $product = Product::find($id);


        if (is_null($product)) {
            return $this->sendError('Product not found.');
        }


        return $this->sendResponse($product->toArray(), 'Product retrieved successfully.');
    }
  
   /**
     * Delete product 
     * @bodyParam $id int
     * @response {
     * "message":"Product deleted sucessfully."
     * } 
     * @response 404
     * {
     * "message":"Product deleted error."
     * }
     */

    public function delete($id)
    {
       $product = new Product();
       $product = Product::findOrFail($id);      
       if($product->delete())
       {
       return response()->json(['message'=>'Product deleted sucessfully.']);
       }
       else
       {
        return response()->json(['message'=>'Product deleted error.']); 
       }
    }   
  
   /**
     * Get prices 
     * @bodyParam bigInt $id of product
     * @response {
     * "prices"
     * }
     */
    public function price($id)
    {
       $product = new Product();
       $product = Product::findOrFail($id);
       $prices = $product->don_gia*$product->sale;
       return response()->json( $prices);
      
    }  




    /**
     * Get product hiden some infomation()
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Products retrieved successfully."
     * }
     * @response 404{
     * 
     * "message":"Product get error."
     * 
     * }
     */   
     public function indexname($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $products = Product::paginate($limit);
     $product1 = $products->getCollection();
     $count = count( $product1);
     $product1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['danh_muc_id','nha_cung_cap_id','ten_san_pham','don_gia','mo_ta_chung']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$product1;
     if($result['data']==!null)
     {
       
        return $this->sendResponse( $result, 'Products retrieved successfully.');
    }
    else
    {
        return response()->json(['message'=>'Product get error.']);
    }
   
    }

 /**
     * Get product with sold
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Products retrieved successfully."
     * }
     * @response 404{
     * 
     * "message":"Product get error."
     * 
     * }
     */   
    public function indexban($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $products = Product::paginate($limit);
     $product1 = $products->getCollection();
     $count = count( $product1);
     $product1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['danh_muc_id','nha_cung_cap_id','ten_san_pham','don_gia','mo_ta_chung','don_vi_ban']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$product1;
     if($result['data']==!null)
     {
       
        return $this->sendResponse( $result, 'Products retrieved successfully.');
    }
    else
    {
        return response()->json(['message'=>'Product get error.']);
    }
   
    }

     /**
     * Get product with stored
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Products retrieved successfully."
     * }
     * @response 404{
     * 
     * "message":"Product get error."
     * 
     * }
     */   
    public function indexton($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $products = Product::paginate($limit);
     $product1 = $products->getCollection();
     $count = count( $product1);
     $product1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['danh_muc_id','nha_cung_cap_id','ten_san_pham','don_gia','mo_ta_chung','don_vi_ton_kho']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$product1;
     if($result['data']==!null)
     {
       
        return $this->sendResponse( $result, 'Products retrieved successfully.');
    }
    else
    {
        return response()->json(['message'=>'Product get error.']);
    }
   
    }



     /**
     * Get list id product
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Id products retrieved successfully."
     * }
     * @response 404{
     * 
     * "message":"Id products get error."
     * 
     * }
     */   
    public function indexid($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $products = Product::paginate($limit);
     $product1 = $products->getCollection();
     $count = count( $product1);
     $product1->each(function ($item) {
        $item->setHidden([])->setVisible(['id','danh_muc_id','nha_cung_cap_id','ten_san_pham','don_gia','mo_ta_chung']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$product1;
     if($result['data']==!null)
     {
       
        return $this->sendResponse( $result, 'Id products retrieved successfully.');
    }
    else
    {
        return response()->json(['message'=>'Id products get error.']);
    }
   
    }

  /**
     * Get list name product is sorted by abc 
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Name-products retrieved successfully."
     * }
     * @response 404{
     * 
     * "message":"Name-products get error."
     * 
     * }
     */   
    public function indexnamesort($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $products = Product::orderBy('ten_san_pham')->paginate($limit);
     $product1 = $products->getCollection();
     $count = count( $product1);
     $product1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['danh_muc_id','nha_cung_cap_id','ten_san_pham','don_gia','mo_ta_chung']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$product1;
     if($result['data']==!null)
     {
       
        return $this->sendResponse( $result, 'Name-products retrieved successfully.');
    }
    else
    {
        return response()->json(['message'=>'Name-products get error.']);
    }
   
    }

/**
     * Get list prices product is sorted increased value 
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Prices-products retrieved successfully."
     * }
     * @response 404{
     * 
     * "message":"Prices-products get error."
     * 
     * }
     */   
    public function indexpricessortincre($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $products = Product::orderBy('don_gia')->paginate($limit);
     $product1 = $products->getCollection();
     $count = count( $product1);
     $product1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['danh_muc_id','nha_cung_cap_id','ten_san_pham','don_gia','mo_ta_chung']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$product1;
     if($result['data']==!null)
     {
       
        return $this->sendResponse( $result, 'Prices-products retrieved successfully.');
    }
    else
    {
        return response()->json(['message'=>'Princes-products get error.']);
    }
   
    }

    /**
     * Get list prices product is sorted increased value 
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Prices-products retrieved successfully."
     * }
     * @response 404{
     * 
     * "message":"Prices-products get error."
     * 
     * }
     */   
    public function indexpricessortdeincre($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $products = Product::orderBy('don_gia','DESC')->paginate($limit);
     $product1 = $products->getCollection();
     $count = count( $product1);
     $product1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['danh_muc_id','nha_cung_cap_id','ten_san_pham','don_gia','mo_ta_chung']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$product1;
     if($result['data']==!null)
     {
       
        return $this->sendResponse( $result, 'Prices-products retrieved successfully.');
    }
    else
    {
        return response()->json(['message'=>'Princes-products get error.']);
    }
   
}



    /**
     * Get product with point 
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Products retrieved successfully."
     * }
     * @response {
     * 
     * "message":"Product get error."
     * 
     * }
     */
    public function indexpoint($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $products = Product::paginate($limit);
     $product1 = $products->getCollection();
     $count = count( $product1);
     $product1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['danh_muc_id','nha_cung_cap_id','ten_san_pham','don_gia','mo_ta_chung','diem_danh_gia_tb']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$product1;
     if($result['data']==!null)
     {
       
        return $this->sendResponse($result, 'Products retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Product get error.']);
    }
   
    }


     /**
     * Get product with point increa
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Products retrieved successfully."
     * }
     * @response {
     * 
     * "message":"Product get error."
     * 
     * }
     */
    public function indexpointsort($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $products = Product::orderBy('diem_danh_gia_tb')->paginate($limit);
     $product1 = $products->getCollection();
     $count = count( $product1);
     $product1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['danh_muc_id','nha_cung_cap_id','ten_san_pham','don_gia','mo_ta_chung','diem_danh_gia_tb']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$product1;
     if($result['data']==!null)
     {
       
        return $this->sendResponse($result, 'Products retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Product get error.']);
    }
   
    }

    /**
     * Get product with point deincrea
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Products retrieved successfully."
     * }
     * @response {
     * 
     * "message":"Product get error."
     * 
     * }
     */
    public function indexpointsortde($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $products = Product::orderBy('diem_danh_gia_tb','DESC')->paginate($limit);
     $product1 = $products->getCollection();
     $count = count( $product1);
     $product1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['danh_muc_id','nha_cung_cap_id','ten_san_pham','don_gia','mo_ta_chung','diem_danh_gia_tb']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$product1;
     if($result['data']==!null)
     {
       
        return $this->sendResponse($result, 'Products retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Product get error.']);
    }
   
    }

/**
     * Get product with point deincrea hindden some infomation deincrea
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Products retrieved successfully."
     * }
     * @response {
     * 
     * "message":"Product get error."
     * 
     * }
     */
    public function indexpointsortde1($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $products = Product::orderBy('diem_danh_gia_tb','DESC')->paginate($limit);
     $product1 = $products->getCollection();
     $count = count( $product1);
     $product1->each(function ($item) {
        $item->setHidden(['id','danh_muc_id'])->setVisible(['nha_cung_cap_id','ten_san_pham','don_gia','mo_ta_chung','diem_danh_gia_tb']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$product1;
     if($result['data']==!null)
     {
       
        return $this->sendResponse($result, 'Products retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Product get error.']);
    }
   
    }


    /**
     * Get product with point deincrea hindden some infomation deincrea
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Products retrieved successfully."
     * }
     * @response {
     * 
     * "message":"Product get error."
     * 
     * }
     */
    public function indexpointsortde2($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $products = Product::orderBy('diem_danh_gia_tb')->paginate($limit);
     $product1 = $products->getCollection();
     $count = count( $product1);
     $product1->each(function ($item) {
        $item->setHidden(['id','danh_muc_id'])->setVisible(['nha_cung_cap_id','ten_san_pham','don_gia','mo_ta_chung','diem_danh_gia_tb']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$product1;
     if($result['data']==!null)
     {
       
        return $this->sendResponse($result, 'Products retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Product get error.']);
    }
   
    }




}