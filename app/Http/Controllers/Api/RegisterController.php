<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Validator;

class RegisterController extends BaseController
{
    // 
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'c_password'=>'required|same:password'
        ]);
        if($validator->fails()){
            return $this->sendError('Validation Error', $validator->errors());
        }
        $input = $request->all();
        $input['password']=bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken('MyApps')->accessToken;
        $success['name'] = $user->name;
        return $this->sendResponse($success, 'User register ok!');
    }
    // 
    public function login(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            $success['token'] = Str::random(60);
            $success['detail_apps'] = $user->createToken('MyApps')->accessToken;
            $success['user'] = array("name"=>$user->name, "email"=> $user->email);
            return $this->sendResponse($success, 'User login successfull');
        }else{
            return $this->sendError('Unauthorised', ['error'=>'unauthorised']);
        }
    }
}
