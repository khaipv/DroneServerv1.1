<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Test;
use Validator;
use App\Model\TestDetail;
use App\Http\Controllers\BaseController as BaseController;
class TestController extends BaseController
{
    public function index()
    {      
       $maxResults = 5;    
       Test::jsonPaginate($maxResults);
       $tests = Test::all();
       return $this->sendResponse($tests->toArray(), 'Tests retrieved successfully.'); 
    }

   
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
    public function update(Request $request, $id)
    {
       $test = new Test();
       $test = Test::findOrFail($id);
       $test->update($request->all());

       return response()->json($test, 200);    
      
    } 
    
    public function delete($id)
    {
       $test = new Test();
       $test = Test::findOrFail($id);
       $test->delete();
       return response()->json(['sucess'=>'test deleted sucessfully']);
      
    }  
    
    public function gettestdetail($id)
    {      
       $testdetail= TestDetail::all()->where('nha_cung_cap_id',$id) ;
       return $testdetail;    
   
    }

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

    public function updatedetail(Request $request, $id)
    {
       $test = new TestDetail();
       $test = TestDetail::findOrFail($id);
       $test->update($request->all());

       return response()->json($test, 200);    
      
    }
    public function deletedetail($id)
    {
       $test = new TestDetail();
       $test = TestDetail::findOrFail($id);
       $test->delete();
       return response()->json(['sucess'=>'Question deleted sucessfully']);
      
    }   
}