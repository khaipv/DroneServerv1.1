<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Role;
use Validator;
class RoleController extends Controller
{
    public function index()
    {      
       $maxResults = 5;    
       Role::jsonPaginate($maxResults);
       $roles = Role::all();
       return $this->sendResponse($roles->toArray(), 'Roles retrieved successfully.'); 
    }

    public function insert(Request $request)
    {         
      $input = $request->all();
 
      $validator = Validator::make($input, [
          'ten_vai_tro' => 'required',
             
      ]);
 
      if($validator->fails()){
          return $this->sendError('Validation Error.', $validator->errors());       
      }
 
      $role = Role::create($input);
 
      return $this->sendResponse($role->toArray(), 'Role created successfully.');
    }
    public function update(Request $request, $id)
    {
        $role = new Role();
        $role = Role::findOrFail($id);
        $role->update($request->all());

       return response()->json($role, 200);    
      
    } 
    
    public function delete($id)
    {
        $role = new Role();
        $role = Role::findOrFail($id);
        $role->delete();
        return response()->json(['sucess'=>'Role deleted sucessfully']);
      
    }   
}