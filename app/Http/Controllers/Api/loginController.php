<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'phone'=>'required',
            'device'=>'required'

        ]);
        $user = User::where('phone',$request->phone);
        if($user &&Hash::check($request->phone,$user->phone)){
            $device = $request->input('device_name',$request->userAgent());
            $token =$user->createToken($device);
            return response()->json([
                'token'=>$token->plainTextToken

            ]);

        }else{
            return response()->json([
                'message'=>'invalid phone'
            ]);
        }
    }
        public function logout(Request $request){

            $user= Auth::guard('sanctum')->user();
            $user->currentAccessToken()->delete();
            return response()->json([
               'message'=>'the token is deleted'
            ]);



        }

    
}
