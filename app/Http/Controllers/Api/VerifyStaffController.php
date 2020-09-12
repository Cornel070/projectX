<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\Code;
use Hash;

class VerifyStaffController extends Controller
{
	//first time staff Id inout verification
    public function verifyStaffID(Request $request)
    {
    	$user = $this->matchRecord( $request->all() );

    	if ( !empty($user)) {
    		$this->genSendCode($user);
    		return response()->json( array('success' => true, 'user'=> $user) );
    	}

    	return response()->json(array('success'=> false, 'user'=> null));
    }

    //search for record in db
    public function matchRecord($request)
    {
    	return $user = User::where('id', $request['staff_id'])
    						->where('email', $request['email'])
    						->first();
    }

    //generate unqiue code and send as email
    public function genSendCode($user)
    {
    	$code = $this->generateCode();
    	if ($this->saveCode($code, $user['id'])) {
    		$beautymail = app()->make(\Snowfire\Beautymail\Beautymail::class);
	        $beautymail->send('emails.sendCode', ['user'=>$user, 'code'=>$code], function($message) use ($user)
	        {
	            $message
	                ->from('projectx@mail.com','ProjectX')
	                ->to($user['email'])
	                ->subject('Verification code');
	        });
	        return true;	
    	}
    	return false;
    }

    //function to create a 6-digit random number as code
    private function generateCode()
    {
        //create a 6 digit random pin
        $x = 5;
        $min = pow(10, $x);
        $max = (pow(10, $x+1)-1);
        $pin = rand($min, $max);

        return $pin;
    }

    // save generated into db for verification purposes
    public function saveCode($code, $user_id)
    {
    	Code::create(['code'=>$code, 'user_id'=>$user_id]);
    	return true;
    }

    //verify code sent to email
    public function verifyEmailCode(Request $request)
    {
    	$verified = false;
    	if ($this->matchCode($request->code, $request->user_id)) {
    		$verified = true;
    	}

    	return response()->json(array('success'=>$verified));
    }

    private function matchCode($code, $id)
    {
    	$matched = false;
    	$code = Code::where('code', $code)
    		  ->where('user_id', $id)
    		  ->first();
    	if (!empty($code)) {
    		 $matched = true;
    	}

    	return $matched;
    }

    public function saveNewPassword(Request $request)
    {
    	$rule = [
    				'password' => ['required','confirmed','min:6']
    			];
        $validator = validator()->make($request->all(), $rule);
         if ($validator->fails()){
         	$msg = 'Password validation failed';
            return response()->json(array('success'=> false, 'errors'=> $validator->messages(), 'message'=> $msg));
        }
        $user = User::find($request->user_id);
        $password = Hash::make($request->password);
        $user->update(['password' => $password]);
        $msg = 'Password successfully set';
        return response()->json(array('success' => true, 'message'=> $msg, 'user'=>$user));
    }

}
