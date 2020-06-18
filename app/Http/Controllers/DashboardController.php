<?php

namespace App\Http\Controllers;
use DB;

use App\Users;
use App\Http\UserAuth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function index(Request $request){
    // đoạn này check xem có cái session nào key 'remember_token' không, nếu có với trả về view k thì trả ra view 404
   	 if ($request->session()->has('remember_token')) {
       return view('layouts.master', ['name' => $request->session()->get('username')]);

      }

      else return view('admin.404');
       
   }
   public function yte(Request $request){


   	 if ($request->session()->has('remember_token')) {
       return view('yte', ['name' => $request->session()->get('username')]);

      }

      else return view('admin.404');
       
   }
   
  
}