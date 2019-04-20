<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Catagory;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
class CatagoryController extends BaseController
{
    /**
     * Get list catagory 
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response
     * {
     * "sucess": true
     * "data":....
     * "message": "Catagories retrieved successfully."
     * }
     * @response 404
     * {
     * "message":"Catagories get error."
     * }
     */

      public function index($page,$limit)
      {      
          Paginator::currentPageResolver(function() use ($page) {
              return $page;
          });
       $catagorys = Catagory::paginate($limit);
       $catagory = $catagorys->toArray();
       $result['total'] = $catagorys->total();
       $result['page'] = $catagorys->currentPage();
       $result['pageSize'] = $catagorys->perPage();
       $result['data']=$catagory['data'];
       if($result['data']==!null)
       {
         
        return $this->sendResponse($result, 'Catagories retrieved successfully.'); 
       }
      else
      {
          return response()->json(['message'=>'Catagories get error.']);
      }
       
    }

     /**
     * Add new catagory
     * @bodyParam $request Request information of catafory add(ten_danh_muc)
     * @response
     * {
     *   "sucess": true
     *   "data": "..."
     *   "message": "Catagories created successfully."
     * } 
     * @response 404
     * {
     *   "message":"Validation Error."
     * }
     */

    public function insert(Request $request)
    {         
    
      $input = $request->all();
 
      $validator = Validator::make($input, [        
          'ten_danh_muc'=>'required',  
      ]);
 
      if($validator->fails()){
          return $this->sendError('Validation Error.', $validator->errors());       
      }
 
      $catagory = Catagory::create($input);
 
 
      return $this->sendResponse($catagory->toArray(), 'Catagories created successfully.');
 
    }

     /**
     * Update old catagory
     * @bodyParam $request Request infomation of catagory update
     * @bodyParam $id id of catagory update
     * @response
     * {
     *   "sucess": true
     *   "data": "..."
     *   "message": "Catagories updated successfully."
     * } 
     * @response 404
     * {
     *   "message":"Catagory updated error."
     * }
     * 
     */


    public function update(Request $request, $id)
    {
       $catagory = new Catagory();
       $catagory = Catagory::findOrFail($id);
       if($catagory->update($request->all()))
       {
         return response()->json(['message'=>'Catagory updated sucessfully.']);
       }
       else
       {
         return response()->json(['message'=>'Catagory updated error.']);
       }
      
    } 
    

     /**
     * Delete catagory with id 
     * @bodyParam $id int id of catagory delete
     * @respone
     * {
     *   "sucess": true
     *   "data": "..."
     *   "message": "Catagory deleted sucessfully."
     * }
     * @response 404
     * {
     *   "message":"Catagory deleted error."
     * } 
     */


    public function delete($id)
    {
       $catagory = new Catagory();
       $catagory = Catagory::findOrFail($id);
       if($catagory->delete())
       {
         return response()->json(['message'=>'Catagory deleted sucessfully.']);
       }
       else
       {
       return response()->json(['message'=>'Catagory deleted error.']);
       }
      
    }   
}