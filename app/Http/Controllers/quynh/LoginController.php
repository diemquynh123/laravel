<?php

namespace App\Http\Controllers\quynh;
use Auth;
use App\User;
use App\Http\Requests\AddUserRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //
      public function getLogin (){
    	return view('quynh.login');
    }

    public function postLogin(Request $request){
    	$arr = [
    		'email' => $request->email,
    		'password' => $request->password,
    	];
    	if(Auth::attempt($arr)){
    		return redirect()->route('home');
    	}else{
    		return back()->withInput()->with('error','tài khoản hoặc mật khẩu không đúng');
    	}
    }
    public function getRegister()
    {
        return view('quynh.register');
    }

    public function postRegister(AddUserRequest $request)
    {
       $register = new User();
            $register->name = $request->name;
            $register->email = $request->email;
            $register->password = bcrypt($request->psw);
            $register->save();
            return redirect()->route('login');
    }
}
