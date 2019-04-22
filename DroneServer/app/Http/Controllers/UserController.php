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
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Users retrieved successfully."
     * }
     * @response 404{
     * 
     * "message":"Users get error."
     * 
     * } 
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
     * Get list user hidden id
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Users retrieved successfully."
     * }
     * @response 404{
     * 
     * "message":"Users get error."
     * 
     * } 
     */
    public function indexwithoutid($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $users = User::paginate($limit);
     $user1 = $users->getCollection();
     $count = count( $user1);
     $user1->each(function ($item) {
        $item->setHidden(['id'])->setVisible(['ho_ten','email','password','so_dien_thoai','dia_chi','vai_tro_id']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page->currentPage();
     $result['pageSize'] = $limit->perPage();
     $result['data']=$user1;
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
     * Get list user hidden id,password
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Users retrieved successfully."
     * }
     * @response 404{
     * 
     * "message":"Users get error."
     * 
     * } 
     */
    public function indexwithoutpass($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $users = User::paginate($limit);
     $user1 = $users->getCollection();
     $count = count( $user1);
     $user1->each(function ($item) {
        $item->setHidden(['id','password'])->setVisible(['ho_ten','email','so_dien_thoai','dia_chi','vai_tro_id']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page->currentPage();
     $result['pageSize'] = $limit->perPage();
     $result['data']=$user1;
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
     * Get list user hidden id,password,email
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Users retrieved successfully."
     * }
     * @response 404{
     * 
     * "message":"Users get error."
     * 
     * } 
     */
    public function indexwithoutemail($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $users = User::paginate($limit);
     $user1 = $users->getCollection();
     $count = count( $user1);
     $user1->each(function ($item) {
        $item->setHidden(['id','password','email'])->setVisible(['ho_ten','so_dien_thoai','dia_chi','vai_tro_id']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page->currentPage();
     $result['pageSize'] = $limit->perPage();
     $result['data']=$user1;
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
     * Get list user hidden id,password,email,role
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Users retrieved successfully."
     * }
     * @response 404{
     * 
     * "message":"Users get error."
     * 
     * } 
     */
    public function indexwithout2($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $users = User::paginate($limit);
     $user1 = $users->getCollection();
     $count = count( $user1);
     $user1->each(function ($item) {
        $item->setHidden(['id','password','email','vai_tro_id'])->setVisible(['ho_ten','so_dien_thoai','dia_chi']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page->currentPage();
     $result['pageSize'] = $limit->perPage();
     $result['data']=$user1;
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
     * Get list user hidden id,password,email,role,phone
     * @bodyParam $page int page in
     * @bodyParam $limit int pageSize
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Users retrieved successfully."
     * }
     * @response 404{
     * 
     * "message":"Users get error."
     * 
     * } 
     */
    public function indexwithout3($page,$limit)
    {      
        Paginator::currentPageResolver(function() use ($page) {
            return $page;
        });
     $users = User::paginate($limit);
     $user1 = $users->getCollection();
     $count = count( $user1);
     $user1->each(function ($item) {
        $item->setHidden(['id','password','email','vai_tro_id','so_dien_thoai','dia_chi'])->setVisible(['ho_ten']);
    }); 
     $result['total'] = $count;
     $result['page'] = $page->currentPage();
     $result['pageSize'] = $limit->perPage();
     $result['data']=$user1;
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
     * @response {
     * "sucess":true
     * "data" : "..."
     * "message":"Users retrieved successfully."
     * }
     * @response 404{
     * 
     * "message":"Users get error."
     * 
     * }  
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
     * @bodyParam $request Request information of user add
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
     * @bodyParam $request Request information of user update
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
     * @bodyParam $id bigInt of user update 
     */
    
    public function delete($id)
    {
       $user = new User();
       $user = User::findOrFail($id);
      
       if($user->delete())
       {
         return response()->json(['message'=>'User deleted sucessfully.']);
       }
      else
       {
         return response()->json(['message'=>'User deleted error.']);
       }  
      
    }  
    
    public function isAdmin()
{
    return $this->type == 0;
} 
}