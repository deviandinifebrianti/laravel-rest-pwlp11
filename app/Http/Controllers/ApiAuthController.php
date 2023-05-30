<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use App\Http\Resources\LoginResource;

class ApiAuthController extends Controller
{
    public function Login(LoginRequest $request){

        $user=User::where('username',$request->username)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return response()->json([
                'message' => 'user atau password salah'
            ],401);
        }

        $token = $user->createToken('token')->plainTextToken;

        // return response()->json([
        //     'message'=>'success login',
        //     'user'=>$user,
        //     'token'=>$token,
        // ],200);

        return new LoginResource([
            'message'=>'success login',
            'user'=>$user,
            'token'=>$token,
        ],200);
    }
}
