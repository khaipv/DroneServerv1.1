<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Order;
use Validator;
use App\Model\OrderDetail;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\BaseController as BaseController;
class OrderController extends BaseController
{
     /**
     * Get list order 
     * @bodyParam $page int  page in
     * @bodyParam $limit int pageSize
     * @response
     * {
     * "sucess": true
     * "data":"..."
     * "message":"Orders retrieved successfully."
     * }
     * @respose 404
     * {
     * "message":"Orders get error."
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
     $orders = Order::paginate($limit);
     $order = $orders->toArray();
     $result['total'] = $orders->total();
     $result['page'] = $orders->currentPage();
     $result['pageSize'] = $orders->perPage();
     $result['data']=$order['data'];
       if($result['data']==!null)
     {
       
      return $this->sendResponse($result, 'Orders retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Orders get error.']);
    }
    }

     /**
     * Get order with user-id 
     * @bodyParam $id bigInt id-order get
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response
     * {
     * "sucess": true
     * "data":"..."
     * "message":"Orders retrieved successfully."
     * }
     * @respose 404
     * {
     * "message":"Orders get error."
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


    public function indexuser($id,$page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $orders = Order::where('nguoi_dung_id',$id)->paginate($limit); 
     $order = $orders->toArray();
     $result['total'] = $orders->total();
     $result['page'] = $orders->currentPage();
     $result['pageSize'] = $orders->perPage();
     $result['data']=$order['data'];
     if($result['data']==!null)
     {
       
      return $this->sendResponse($result, 'Orders retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Orders get error.']);
    }
    }

    /**
     * Get order with date-order
     * @bodyParam $date date date order get api
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response
     * {
     * "sucess": true
     * "data":"..."
     * "message":"Orders retrieved successfully."
     * }
     * @respose 404
     * {
     * "message":"Orders get error."
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

    public function indexdateorder($date,$page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $orders = Order::where('ngay_dat',$date)->paginate($limit); 
     $order = $orders->toArray();
     $result['total'] = $orders->total();
     $result['page'] = $orders->currentPage();
     $result['pageSize'] = $orders->perPage();
     $result['data']=$order['data'];
     if($result['data']==!null)
     {
       
      return $this->sendResponse($result, 'Orders retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Orders get error']);
    }
    }

     /**
     * Get order with date-order
     * @bodyParam $date date date-recived get api
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response
     * {
     * "sucess": true
     * "data":"..."
     * "message":"Orders retrieved successfully."
     * }
     * @respose 404
     * {
     * "message":"Orders get error."
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

    public function indexreci($date,$page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $orders = Order::where('ngay_nhan',$date)->paginate($limit); 
     $order = $orders->toArray();
     $result['total'] = $orders->total();
     $result['page'] = $orders->currentPage();
     $result['pageSize'] = $orders->perPage();
     $result['data']=$order['data'];
     if($result['data']==!null)
     {
       
      return $this->sendResponse($result, 'Orders retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Orders get error']);
    }
    }



  /**
     * Add new order 
     * @bodyParam $request Request information of order add
     * @response
     * {
     * "sucess": true
     * "data":"..."
     * "message":"Order created successfully."
     * }
     * @respose 404
     * {
     * "message":"Validation Error."
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
          'dia_chi_nhan' => 'required',
          'ngay_dat' => 'required',
          'sdt_nhan_hang'=>'required',
          'nguoi_dung_id' =>'required',      
      ]);
 
      if($validator->fails()){
          return $this->sendError('Validation Error.', $validator->errors());       
      }
 
      $order = Order::create($input);
 
 
      return $this->sendResponse($order->toArray(), 'Order created successfully.');
 
    }

/**
     * Add new order-detail
     * @bodyParam $request Request information of order add
     * @response
     * {
     * "sucess": true
     * "data":"..."
     * "message":"Order detail created successfully."
     * }
     * @respose 404
     * {
     * "message":"Validation Error."
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
          'don_gia' => 'required',
          'san_pham_id'=>'required',
          'don_hang_id' =>'required',      
      ]);
 
      if($validator->fails()){
          return $this->sendError('Validation Error.', $validator->errors());       
      }
 
      $order = OrderDetail::create($input);
 
 
      return $this->sendResponse($order->toArray(), 'Order-detail created successfully.');
 
    }



     /**
     * Update old order
     * @bodyParam $request Request information update
     * @bodyParam $id bigInt id of order update
     * @response
     * {
     * "message":"Orders updated successfully."
     * }
     * @respose 404
     * {
     * "message":"Orders updated error."
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
       $order = new Order();
       $order = Order::findOrFail($id);     
       if($order->update($request->all()))
       {
        return response()->json(['message'=>'Orders updated successfully.']);
       }
       else
       {
        return response()->json(['message'=>'Orders updated error.']);
       }
    } 


     /**
     * Update old order-detail
     * @bodyParam $request Request information update
     * @bodyParam $id bigInt id of order update
     * @response
     * {
     * "message":"Order-detail updated successfully."
     * }
     * @respose 404
     * {
     * "message":"Order-detail updated error."
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
       $order = new OrderDetail();
       $order = OrderDetail::findOrFail($id);     
       if($order->update($request->all()))
       {
        return response()->json(['message'=>'Order-detail updated successfully.']);
       }
       else
       {
        return response()->json(['message'=>'Order-detail updated error.']);
       }
    } 


     /**
     * Delete order with id
     * @bodyParam $id bigInt id-order delete
     * @response
     * {
     * "message":"Order deleted sucessfully."
     * }
     * @respose 404
     * {
     * "message":"Order deleted error."
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
       $order = new Order();
       $order = Order::findOrFail($id);
       $orderdetail= OrderDetail::where('don_hang_id',$id);
       if(($orderdetail->delete())&&($order->delete()))
       {
       return response()->json(['message'=>'Order deleted sucessfully.']);
       }
       else
       {
        return response()->json(['message'=>'Order deleted error.']);
       }
    }  
    

     /**
     * Delete order-detail with id
     * @bodyParam $id bigInt id-order delete
     * @response
     * {
     * "message":"Order-detail deleted sucessfully."
     * }
     * @respose 404
     * {
     * "message":"Order-detail deleted error."
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
       $order = new OrderDetail();
       $order = OrderDetail::findOrFail($id);
       if($order->delete())
       {
       return response()->json(['message'=>'Order-detail deleted sucessfully.']);
       }
       else
       {
        return response()->json(['message'=>'Order-detail deleted error.']);
       }
    }  
    
   /**
     * Get detail-order with id
     * @bodyParam $id bigInt id order want to get detail
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response
     * {
     * "sucess": true
     * "data":"..."
     * "message":"OrderDetails retrieved successfully."
     * }
     * @respose 404
     * {
     * "message":"OrderDetails get error."
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


    public function getdetailorder($id,$page,$limit)
    {     
      Paginator::currentPageResolver(function() use ($page) {
         return $page;
     });
  $orderdetail= OrderDetail::where('don_hang_id',$id)->paginate($limit);
  $order = $orderdetail->toArray();
  $result['total'] = $orderdetail->total();
  $result['page'] = $orderdetail->currentPage();
  $result['pageSize'] = $orderdetail->perPage();
  $result['data']=$order['data'];
  if($result['data']==!null)
  {
     
  return $this->sendResponse($result, 'OrderDetails retrieved successfully.');   
  }
  else
  {
  return response()->json(['message'=>'OrderDetails get error.']);
  }
    }

 /**
     * Get list order hidden id
     * @bodyParam $page int  page in
     * @bodyParam $limit int pageSize
     * @response
     * {
     * "sucess": true
     * "data":"..."
     * "message":"Orders retrieved successfully."
     * }
     * @respose 404
     * {
     * "message":"Orders get error."
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

    public function indexwithouid($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $orders = Order::paginate($limit);
     $order1 = $orders->getCollection();
     $count = count( $order1);
     $order1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['dia_chi_nhan','ngay_dat','ngay_nhan','sdt_nhan_hang','trang_thai','nguoi_dung_id']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$order1;
       if($result['data']==!null)
     {
       
      return $this->sendResponse($result, 'Orders retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Orders get error.']);
    }
    }

/**
     * Get list order sortby date recieved
     * @bodyParam $page int  page in
     * @bodyParam $limit int pageSize
     * @response
     * {
     * "sucess": true
     * "data":"..."
     * "message":"Orders retrieved successfully."
     * }
     * @respose 404
     * {
     * "message":"Orders get error."
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

    public function indexsortbydatere($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $orders = Order::orderBy('ngay_nhan','ASC')->paginate($limit);
     $order1 = $orders->getCollection();
     $count = count( $order1);
     $order1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['dia_chi_nhan','ngay_dat','ngay_nhan','sdt_nhan_hang','trang_thai','nguoi_dung_id']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$order1;
       if($result['data']==!null)
     {
       
      return $this->sendResponse($result, 'Orders retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Orders get error.']);
    }
    }

/**
     * Get list order sortby date recieved
     * @bodyParam $page int  page in
     * @bodyParam $limit int pageSize
     * @response
     * {
     * "sucess": true
     * "data":"..."
     * "message":"Orders retrieved successfully."
     * }
     * @respose 404
     * {
     * "message":"Orders get error."
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

    public function indexsortbydatere1($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $orders = Order::orderBy('ngay_nhan','DESC')->paginate($limit);
     $order1 = $orders->getCollection();
     $count = count( $order1);
     $order1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['dia_chi_nhan','ngay_dat','ngay_nhan','sdt_nhan_hang','trang_thai','nguoi_dung_id']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$order1;
       if($result['data']==!null)
     {
       
      return $this->sendResponse($result, 'Orders retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Orders get error.']);
    }
    }


/**
     * Get list order sortby date ordered
     * @bodyParam $page int  page in
     * @bodyParam $limit int pageSize
     * @response
     * {
     * "sucess": true
     * "data":"..."
     * "message":"Orders retrieved successfully."
     * }
     * @respose 404
     * {
     * "message":"Orders get error."
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

    public function indexsortbydateor($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $orders = Order::orderBy('ngay_dat','ASC')->paginate($limit);
     $order1 = $orders->getCollection();
     $count = count( $order1);
     $order1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['dia_chi_nhan','ngay_dat','ngay_nhan','sdt_nhan_hang','trang_thai','nguoi_dung_id']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$order1;
       if($result['data']==!null)
     {
       
      return $this->sendResponse($result, 'Orders retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Orders get error.']);
    }
    }

    /**
     * Get list order sortby date ordered 
     * @bodyParam $page int  page in
     * @bodyParam $limit int pageSize
     * @response
     * {
     * "sucess": true
     * "data":"..."
     * "message":"Orders retrieved successfully."
     * }
     * @respose 404
     * {
     * "message":"Orders get error."
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

    public function indexsortbydateor1($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $orders = Order::orderBy('ngay_dat','DESC')->paginate($limit);
     $order1 = $orders->getCollection();
     $count = count( $order1);
     $order1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['dia_chi_nhan','ngay_dat','ngay_nhan','sdt_nhan_hang','trang_thai','nguoi_dung_id']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$order1;
       if($result['data']==!null)
     {
       
      return $this->sendResponse($result, 'Orders retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Orders get error.']);
    }
    }


    
}