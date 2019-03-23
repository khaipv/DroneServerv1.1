<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
use Carbon\Carbon;
use App\Http\Middleware\Authenticate;
use Validator;

class AuthController extends Controller
{
	public $successStatus = 200;
    
  
    public function login(Request $request)
    {
		$request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
            'remember_me' => 'boolean'
        ]);
        $credentials = request(['email', 'password']);
        if(!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        if ($request->remember_me)
            $token->expires_at = Carbon::now()->addWeeks(1);
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }
  
         /**
     * register API
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
    $request->validate([
	'ho_ten' => 'required|string',
	'email' => 'required|string|email|unique:nguoi_dung',
    'password' => 'required|between:8,255|confirmed',
    'so_dien_thoai' => 'required|string',
    'dia_chi' => 'required|string',
	'password_confirmation' => 'required ',
]); 

{
    $user = User::create([
      'ho_ten'     => $request['ho_ten'],
      'email'    => $request['email'],
      'password' => bcrypt($request['password']),
      'so_dien_thoai'=> $request['so_dien_thoai'],
      'dia_chi'=> $request['dia_chi'],
      'vai_tro_id'=> '1',
    ]);
   
       $result= $user->save();
       if($result=1)
       {
       return response()->json([
        'message' => 'Successfully created user!','user'=>$user
   ], 201);
}	
}
    }  	
	
   
    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
	} 
	
	 /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function user(Request $request)
    {
        return response()->json($request->user());
	}
	
	/**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

   
}
