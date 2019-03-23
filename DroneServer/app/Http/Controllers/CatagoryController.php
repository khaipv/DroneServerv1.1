<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Catagory;
use Validator;
class CatagoryController extends Controller
{
   public function index()
    {      
       $maxResults = 5;    
       Catagory::jsonPaginate($maxResults);
       $carts = Catagory::all();
       return $this->sendResponse($carts->toArray(), 'Catagories retrieved successfully.'); 
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