<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Role;
use Illuminate\Pagination\Paginator;
use Validator;
use App\Http\Controllers\BaseController as BaseController;
class RoleController extends BaseController
{
          
   /**
     * Get list role 
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response
     * {
     * "sucess": true
     * "data":"..."
     * "message":"Roles retrieved successfully."
     * }
     * @respose 404
     * {
     * "message":"Roles get error."
     * }
     */
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
     if($result['data']==!null)
     {
       
        return $this->sendResponse($result, 'Roles retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Roles get error.']);
    }
    
    }
    
  
/**
     * Get list role witout id
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response
     * {
     * "sucess": true
     * "data":"..."
     * "message":"Roles retrieved successfully."
     * }
     * @respose 404
     * {
     * "message":"Roles get error."
     * }
     */
    public function indexid($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $roles = Role::paginate($limit);
     $role1 = $roles->getCollection();
     $count = count( $role1);
     $role1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['ten_vai_tro']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page;
     $result['pageSize'] = $limit;
     $result['data']=$roles;
     if($result['data']==!null)
     {
       
        return $this->sendResponse($result, 'Roles retrieved successfully.');
     }
    else
    {
        return response()->json(['message'=>'Roles get error.']);
    }
    
    }
    




   /**
     * Add new role 
     * @bodyParam $request Request information of role add(ten_vai_tro)
     * @response
     * {
     * "sucess": true
     * "data":"..."
     * "message":"Role created successfully."
     * }
     * @respose 404
     * {
     * "message":"Validation Error."
     * }
     */
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

      
   /**
     * Update role with id    
     * @bodyParam $request Request infomation of role update
     * @bodyParam $id bigInt if of role update 
     * @response
     * {
     * "message":"Roles updated successfully."
     * }
     * @respose 404
     * {
     * "message":"Roles updated error."
     * } 
     */

    public function update(Request $request, $id)
    {
        $role = new Role();
        $role = Role::findOrFail($id);
        if($role->update($request->all()))
        {
            return response()->json(['message'=>'Roles updated successfully.']);
        }
         else
         {
            return response()->json(['message'=>'Roles updated error.']);
         }
          
    } 
    
      
   /**
     * Delete role with id
     * @bodyParam $id bigInt id of role delete
     * @response
     * {
     * "message":"Role deleted sucessfully."
     * }
     * @respose 404
     * {
     * "message":"Role deleted error."
     * }  
     */

    public function delete($id)
    {
        $role = new Role();
        $role = Role::findOrFail($id);
        if($role->delete())
        {
            return response()->json(['message'=>'Role deleted sucessfully.']);
        }
        else
        {
            return response()->json(['message'=>'Role deleted error.']);
        }
      
    }   
}