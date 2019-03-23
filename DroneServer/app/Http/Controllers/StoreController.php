<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Store;
use Validator;
class StoreController extends Controller
{
    public function index()
    {      
       $maxResults = 5;    
       Store::jsonPaginate($maxResults);
       $stores = Store::all();
       return $this->sendResponse($stores->toArray(), 'Stores retrieved successfully.'); 
    }

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
    public function update(Request $request, $id)
    {
        $store = new Store();
        $store = Store::findOrFail($id);
        $store->update($request->all());

       return response()->json($store, 200);    
      
    } 
    
    public function delete($id)
    {
        $store = new Store();
        $store = Store::findOrFail($id);
        $store->delete();
        return response()->json(['sucess'=>'Store deleted sucessfully']);
      
    }   
}