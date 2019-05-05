<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Store;
use Illuminate\Pagination\Paginator;
use Validator;
use App\Http\Controllers\BaseController as BaseController;
class StoreController extends BaseController
{
      
   /**
     * Get store 
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Stores retrieved successfully."
     * }
     * @response 404
     * {
     * 
     * "message":"Stores get error."
     * 
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
     $stores = Store::paginate($limit);
     $store = $stores->toArray();
     $result['total'] = $stores->total();
     $result['page'] = $stores->currentPage();
     $result['pageSize'] = $stores->perPage();
     $result['data']=$store['data'];
     if($result['data']==!null)
     {
       
        return $this->sendResponse($result, 'Stores retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Stores get error.']);
    }
       
    }
  


 /**
     * Get store 
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Stores retrieved successfully."
     * }
     * @response 404
     * {
     * 
     * "message":"Stores get error."
     * 
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
     $stores = Store::paginate($limit);
     $store1 = $stores->getCollection();
     $count = count( $store1);
     $store1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['sdt','dia_chi','email','nguoi_dung_id']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$store1;
     if($result['data']==!null)
     {
       
        return $this->sendResponse($result, 'Stores retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Stores get error.']);
    }
       
    }

   /**
     * Add new store 
     * @bodyParam $request Request information of store add(dia_chi,email,sdt,nguoi_dung_id)
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Store created successfully."
     * }
     * @response 404
     * {
     * 
     * "message":"Validation Error."
     * 
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
          'dia_chi' => 'required',
          'email'=>'required',
          'sdt'=>'required',
          'nguoi_dung_id'=>'required',
             
      ]);
    
    if($validator->fails()){
        return $this->sendError('Validation Error.', $validator->errors());       
    }

    $store = Store::create($input);


    return $this->sendResponse($store->toArray(), 'Store created successfully.');

}
  
   /**
   * Update store 
   * @bodyParam $request Request information of store update
   * @bodyParam $id bigInt id of store update
   * @response {
   * "message": "Stores updated successfully."
   * }
   * @response 404{
   * "message":"Stores updated error." 
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
        $store = new Store();
        $store = Store::findOrFail($id);
        if($store->update($request->all()))
        {
            return response()->json(['message'=>'Stores updated successfully.']);
        }
        else
        {
            return response()->json(['message'=>'Stores updated error.']);
        }
          
      
    } 
      
   /**
     * Delete store 
     * @bodyParam $id bigInt store id delete
     * @response {
     * "message": "Store deleted sucessfully."
     * }
     * @response 404{
     * "message":"Store deleted error." 
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
        $store = new Store();
        $store = Store::findOrFail($id);
        if($store->delete())
        {
            return response()->json(['message'=>'Store deleted sucessfully.']);
        }
        else
        {
            return response()->json(['message'=>'Store deleted error.']);
        }       
      
    }   
}