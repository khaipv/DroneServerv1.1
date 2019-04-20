<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Test;
use Validator;
use App\Model\TestDetail;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\BaseController as BaseController;
class TestController extends BaseController
{
     
   /**
     * Get test information 
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Tests retrieved successfully."
     * }
     * @response 404
     * {
     * 
     * "message":"Tests get error."
     * 
     * }  
     */
   public function index($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $tests = Test::paginate($limit);
     $test = $tests->toArray();
     $result['total'] = $tests->total();
     $result['page'] = $tests->currentPage();
     $result['pageSize'] = $tests->perPage();
     $result['data']=$test['data'];
     if($result['data']==!null)
     {
       
      return $this->sendResponse($result, 'Tests retrieved successfully.'); 
     }
    else
    {
        return response()->json(['message'=>'Tests get error.']);
    }
      
    }
  
   /**
     * Add new test
     * @bodyParam $request Request information of test add (ten_bai_kiem_tra,so_cau,thoi_gian,nha_cung_cap_id)
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Test created successfully."
     * }
     * @response 404
     * {
     * 
     * "message":"Validation Error."
     * 
     * }  
     */
   
    public function insert(Request $request)
    {         
    
      $input = $request->all();
 
      $validator = Validator::make($input, [
          'ten_bai_kiem_tra' => 'required',
          'so_cau' => 'required',
          'thoi_gian'=>'required',
          'nha_cung_cap_id' =>'required',      
      ]);
 
      if($validator->fails()){
          return $this->sendError('Validation Error.', $validator->errors());       
      }
 
      $test = Test::create($input);
 
 
      return $this->sendResponse($test->toArray(), 'Test created successfully.');
 
    }
      
   /**
     * Update test 
     * @bodyParam $request Request information of test update
     * @bodyParam $id bigInt if of test update 
     * @response {
     * "message":"Test updated sucessfully."
     * }
     * @response 404
     * {
     * 
     * "message":"Test updated error."
     * 
     * }   
     */
    public function update(Request $request, $id)
    {
       $test = new Test();
       $test = Test::findOrFail($id);
       if($test->update($request->all()))
       {
         return response()->json(['message'=>'Test updated sucessfully.']);
       }
       else
       {
         return response()->json(['message'=>'Test updated error.']);
       }

      
    } 
      
   /**
     * Delete test
     * @bodyParam $id bigInt id of test delete
     * @response {
     * "message": "Test deleted sucessfully."
     * }
     * @response 404{
     * "message":"Test deleted error." 
     * }  
     */
    public function delete($id)
    {
       $test = new Test();
       $test = Test::findOrFail($id);
       if($test->delete())
       {
         return response()->json(['message'=>'Test deleted sucessfully.']);
       }
      else
       {
         return response()->json(['message'=>'Test deleted error.']);
       }
      
    }  
      
    /**
     * Get test information 
     * @bodyParam int $page page in
     */
    public function gettestdetail($id)
    {      
       $testdetail= TestDetail::all()->where('nha_cung_cap_id',$id) ;
       return $testdetail;    
   
    }
  
   /**
     * Insert detail-test detail 
     * @bodyParam $request Request information of detailtest add
     * @response {
     * "message":"Question created successfully."
     * }
     * @response 404
     * {
     * "message":"Validation Error."
     * }   
     */
    public function insertdetail(Request $request)
    {         
    
      $input = $request->all();
 
      $validator = Validator::make($input, [
          'cau_hoi' => 'required',
          'dap_an_1' => 'required',
          'dap_an_2'=>'required',
          'dap_an_3'=>'required',
          'dap_an_4'=>'required',
          'key'=>'required',
          'bai_kiem_tra_id' =>'required',      
      ]);
 
      if($validator->fails()){
          return $this->sendError('Validation Error.', $validator->errors());       
      }
 
      $test = TestDetail::create($input);
 
 
      return $this->sendResponse($test->toArray(), 'Question created successfully.');
 
    }
  
   
   /**
     * Update detail-test detail 
     * @bodyParam $request Request information of detailtest update
     * @bodyParam $id bigInt of detail update
      * @response {
     * "message": "Test-details updated sucessfully."
     * }
     * @response 404{
     * "message":"Test-details updated error." 
     * }   
     */

    public function updatedetail(Request $request, $id)
    {
       $test = new TestDetail();
       $test = TestDetail::findOrFail($id);
       $test->update($request->all());

       if( $test->update($request->all()))
       {
         return response()->json(['message'=>'Test-details updated sucessfully.']);
       }
      else
       {
         return response()->json(['message'=>'Test-details updated error.']);
       }    
      
    }

      
   /**
     * Delete detail test
     * @bodyParam $id bigInt delete
     * @response {
     * "message": "Question deleted sucessfully."
     * }
     * @response 404{
     * "message":"Question deleted error." 
     * }   
     */
    public function deletedetail($id)
    {
       $test = new TestDetail();
       $test = TestDetail::findOrFail($id);  
       if($test->delete())
       {
         return response()->json(['message'=>'Question deleted sucessfully.']);
       }
      else
       {
         return response()->json(['message'=>'Question deleted error.']);
       } 
      
    }   
}