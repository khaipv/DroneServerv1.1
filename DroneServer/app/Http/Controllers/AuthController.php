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
    
   /**
     * Login
     * @bodyParam $request Request infomation login email, password
     * @response{
     * "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjhiOWJhZGNhOGUzOTU2Y2UyNDhjZjQ4NWIxMTc1MWRkMDM1ZGE2YjZmNWExNDA1YmFlN2ExMTIzMTdlNDNjODgwMGRkZmZkYzIxNzI4YjVjIn0.eyJhdWQiOiIxIiwianRpIjoiOGI5YmFkY2E4ZTM5NTZjZTI0OGNmNDg1YjExNzUxZGQwMzVkYTZiNmY1YTE0MDViYWU3YTExMjMxN2U0M2M4ODAwZGRmZmRjMjE3MjhiNWMiLCJpYXQiOjE1NTUzMjc1MjIsIm5iZiI6MTU1NTMyNzUyMiwiZXhwIjoxNTg2OTQ5OTIyLCJzdWIiOiIzIiwic2NvcGVzIjpbXX0.isVOgUgiUDaOizURiXGVuGXpXS8hmFFTuVWIP5qQ2xqknntoDDGGG-CVrvdT-OkNAdHyyxlEZQ-1WfM194LC3lJTDf2Y6FdHNAykJtLZNbbvGXENX7s0GPVjlqvvKKwOqWk6mTe4hovrBRqBcPVRNtLsCi9huHmEiLHQFBZdf3E3kCLJJLajJ4PSsZqTcFixkSaxyQ0AkjLRfTMd7ANGCh8Zi-kkHGKV_FW_fBZvGESARC6Iaga-pftHZD2LLMzkakxTx9pbb7V58oGrqNrDL3oMt-W18jjxf5QIDwrVc0gcrIF9-YUaKzfTgmX3C6EbfJZnMG8npImkOsnnmwAr_C7F_w5ijSyybXGgb0oCtn29Ci4jcMsuQCOcvp1M_5nF6kXGgVzE06pYYM0rdXdI1NFSo2Y_ymjhHYwq1nRdrbKmy8AE-Bm9hhyxZ8hMIMeA7KOvt7VMJgAsrQThVd_gHEMs5Z1MNpxi5RG35n4ycRfZsoZX9wyU1WOKfAxpwxogbJhQ2lwslupjctuUOWF90M-yaBML-pvbqQP_EH62QiJlpaJWUDop2jdofJSpfdZuOXsKKJrAlbIDusLY776wjdy4L6iMeA3_Bu3nL3PGsaRMjgvsgu4itQeGzV3PlCBh3soPEvRhq_4CFCK2Cs0sm0ChR8LpvrBPU1AtjjbuQ-o",
     * "token_type": "Bearer",
     * "expires_at": "2020-04-15 11:25:22"
     * }
     * @response 404 {
     *  message": "Unauthorized"
     * } 
     */

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
     * Register 
     * @bodyParam $request Request infomation of user (ho_ten,email,password,so_dien_thoai,dia_chi,password_confirmation)
     * @response{
     * "message": "Successfully created user!",
     * "token_type": "Bearer",
     * "expires_at": "2020-04-15 11:25:22"
     * }
     * @response 404 {
     *  "message": "Validation Error"
     * }  
     */
    public function register(Request $request)
    {
$input = $request->all();

$validator = Validator::make($input, [
    'ho_ten' => 'required|string',
	'email' => 'required|string|email|unique:nguoi_dung',
    'password' => 'required|between:8,255|confirmed',
    'so_dien_thoai' => 'required|string',
    'dia_chi' => 'required|string',
	'password_confirmation' => 'required ',
       
]);

if($validator->fails()){
  //  return $this->sendError('Validation Error.', $validator->errors());   
    return response()->json([
        'message' => 'Error created user!']);    
}


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
       if($result==1)
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
     * @bodyParam $request Request (token delete logout) 
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
