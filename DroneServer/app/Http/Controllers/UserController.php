<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
class UserController extends BaseController
{

     
   /**
     * Get list user 
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     */
   public function index($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $users = User::paginate($limit);
     $user = $users->toArray();
     $result['total'] = $users->total();
     $result['page'] = $users->currentPage();
     $result['pageSize'] = $users->perPage();
     $result['data']=$user['data'];
     if($result['data']==!null)
     {
      return $this->sendResponse($result, 'Users retrieved successfully.'); 
     }
     else
     {
      return response()->json(['message'=>'User get error.']);
     }
    }

      
   /**
     * Get user with role 
     * @bodyParam bigInt $id id of role
     * @bodyParam int $page page int
     * @bodyParam int $limit pageSize
     */
    public function indexrole($id,$page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $users = User::where('vai_tro_id',$id)->paginate($limit); 
     $user = $users->toArray();
     $result['total'] = $users->total();
     $result['page'] = $users->currentPage();
     $result['pageSize'] = $users->perPage();
     $result['data']=$user['data'];
     if($result['data']==!null)
     {
      return $this->sendResponse($result, 'Users retrieved successfully.'); 
     }
     else
     {
      return response()->json(['sucess'=>'User get error.']);
     }
    }
  
   /**
     * Add new user
     * @bodyParam Request $request information of user add
     */
    public function insert(Request $request)
    {         
       $user= new User;
       $user->id = $request->input('id');
       $user->ho_ten = $request->input('ho_ten');
       $user->email = $request->input('email');
       $user->mat_khau = Hash::make($request->input('mat_khau'));
       $user->so_dien_thoai = $request->input('so_dien_thoai');
       $user->dia_chi=$request->input('dia_chi');   
       $user->vai_tro_id=$request->input('vai_tro_id');
       $result=$user->save();
       if($result==1)
       {
         return response()->json($user, 201);
       }
    }
      
   /**
     * Update old user 
     * @bodyParam Request $request information of user update
     * @bodyParam bigInt $id of user
     */
    public function update(Request $request, $id)
    {
       $user = new User();
       $user = User::findOrFail($id);
      
       if( $user->update($request->all()))
       {
         return response()->json(['sucess'=>'user updated sucessfully.']);
       }
      else
       {
         return response()->json(['sucess'=>'test updated error.']);
       }  
      
    } 
      
   /**
     * Delete user 
     * @bodyParam bigInt $id of user update 
     */
    
    public function delete($id)
    {
       $user = new User();
       $user = User::findOrFail($id);
      
       if($user->delete())
       {
         return response()->json(['sucess'=>'user deleted sucessfully.']);
       }
      else
       {
         return response()->json(['sucess'=>'test deleted error.']);
       }  
      
    }  
    
    public function isAdmin()
{
    return $this->type == 0;
} 
}