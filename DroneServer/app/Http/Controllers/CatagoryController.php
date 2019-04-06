<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Catagory;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
class CatagoryController extends BaseController
{
        
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
       return $this->sendResponse($result, 'Catagories retrieved successfully.'); 
    }


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
    public function update(Request $request, $id)
    {
       $catagory = new Catagory();
       $catagory = Catagory::findOrFail($id);
       $catagory->update($request->all());

       return response()->json(['sucess'=>'Catagory deleted sucessfully']);   
      
    } 
    
    public function delete($id)
    {
       $catagory = new Catagory();
       $catagory = Catagory::findOrFail($id);
       $catagory->delete();
       return response()->json(null, 204);
      
    }   
}