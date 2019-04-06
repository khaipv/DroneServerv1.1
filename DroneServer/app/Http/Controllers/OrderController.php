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
       return $this->sendResponse($result, 'Orders retrieved successfully.'); 
    }

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
       return $this->sendResponse($result, 'Orders retrieved successfully.'); 
    }

   
    public function insert(Request $request)
    {         
    
      $input = $request->all();
 
      $validator = Validator::make($input, [
          'dia_chi_nguoi_nhan' => 'required',
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
    public function update(Request $request, $id)
    {
       $order = new Order();
       $order = Order::findOrFail($id);
       $order->update($request->all());

       return response()->json($order, 200);    
      
    } 
    
    public function delete($id)
    {
       $order = new Order();
       $order = Order::findOrFail($id);
       $order->delete();
       return response()->json(['sucess'=>'Order deleted sucessfully']);
      
    }  
    
  
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
  return $this->sendResponse($result, 'OrderDetails retrieved successfully.');   
   
    }
}