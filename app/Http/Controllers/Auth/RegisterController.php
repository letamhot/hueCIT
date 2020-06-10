<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\RegisterRequest;
use App\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{


    public function getRegister(){
        return view('admin.register');
    }
    // laravel hỗ trợ hàm dkd rồi nè, sao k sd lại
    public function add(RegisterRequest $request){
        var_dump($request['name']);

        try {
            $message = trans('messages.error');
            $users = Users::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => bcrypt($request['password']),
            ]);
            if (!empty($users)) {
                $message = trans('messages.registered');
                    return redirect('/register')->with('success_msg', $message);
            }
        } catch (\Exception $e) {
            Log::error(__CLASS__ . "::" . __METHOD__ . "  " . $e->getMessage() . "on line" . $e->getLine());
        }
        return redirect('/register')->with('error_msg', $message);
    }


}