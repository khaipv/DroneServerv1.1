<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Order;
use Validator;
use App\Model\OrderDetail;
use App\Http\Controllers\BaseController as BaseController;
class OrderController extends BaseController
{
    public function index()
    {      
       $maxResults = 5;    
       Order::jsonPaginate($maxResults);
       $orders = Order::all();
       return $this->sendResponse($orders->toArray(), 'Oders retrieved successfully.'); 
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
    
    public function getdetailorder($id)
    {      
       $orderdetail= OrderDetail::all()->where('don_hang_id',$id) ;
       return $orderdetail;    
   
    }
}