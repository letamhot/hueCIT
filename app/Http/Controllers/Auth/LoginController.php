<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

use Redirect;



class LoginController extends Controller
{

   
   
    public function doLogin(Request $request){
        try {
            

      
            $message = trans('messages.invalid_login_credentials');
            $rememberMe = false;
            $users = Users::where('email', $request->email)->first();


            if (!empty($users)) {

                    $isPasswordMatched = \Hash::check($request->password, $users->password);
                    if ($isPasswordMatched) {
                        // đoạn này là đăng nhập thành công rồi, gán session voi key 'remember_token' va nhan gt cua $users->remember_token.
                         $request->session()->put('remember_token', $users->remember_token);

            $request->session()->put('username', $users->name);
                        Auth::loginUsingId($users->id, $rememberMe);
                        return redirect('/dashboard');
                    }
                }
        } catch (\Exception $e) {
            Log::error(__CLASS__ . "::" . __METHOD__ . "  " . $e->getMessage() . "on line" . $e->getLine());
        }
        return redirect('/login')->with('error_msg', $message);
    }


    public function logout(Request $request){
        $request->session()->forget('remember_token');
        $request->session()->forget('username');

        return redirect('/login');
    }



 public function showLogin(Request $request)
{
     if ($request->session()->has('remember_token')) 
                return redirect('/dashboard');
            

    return view('admin.login');
}




   } 

