<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Role;
use Illuminate\Pagination\Paginator;
use Validator;
use App\Http\Controllers\BaseController as BaseController;
class RoleController extends BaseController
{
        
    public function index($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $roles = Role::paginate($limit);
     $role = $roles->toArray();
     $result['total'] = $roles->total();
     $result['page'] = $roles->currentPage();
     $result['pageSize'] = $roles->perPage();
     $result['data']=$role['data'];
     return $this->sendResponse($result, 'Roles retrieved successfully.');
   
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