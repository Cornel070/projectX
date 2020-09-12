<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;
use Validator;

class UserController extends Controller
{
	public function login (Request $request) {
		    $validator = Validator::make($request->all(), [
		        'email' => 'required|string|email|max:255',
		        'password' => 'required|string|min:6',
		    ]);
		    if ($validator->fails())
		    {
		    	$msg= 'Validation errors';
		        return response(['success'=> false, 'message'=>$msg,'errors'=>$validator->errors()->all()]);
		    }
		    $user = User::where('email', $request->email)->first();
		    if ($user) {
		        if (Hash::check($request->password, $user->password)) {
		            $token = $user->createToken('Laravel Password Grant Client')->accessToken;
		            return response(array('success'=>true, 'token' => $token));
		        } else {
		            return response(array('success'=>false, "message" => "Password mismatch"));
		        }
		    } else {
		        $response = [];
		        return response(array('success'=>false, "message" =>'User does not exist'));
		    }
	}

	public function logout(Request $request)
	{
		$token = $request->user()->token();
		$token->revoke();
		$msg = 'Logged out!';
		return response()->json(array('success'=>true, 'message'=>$msg));
	}
}
