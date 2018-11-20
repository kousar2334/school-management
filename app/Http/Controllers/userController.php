<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class userController extends Controller
{
   public function index()
   {
   	return view('auth.login');
   }
   public function login_verified(Request $request)
   {
       $request->validate([
       	'email'=>'required',
       	'password'=>'required',
       ]);
       $email=$request->email;
       $password=$request->password;
       $admin_data=Admin::get();
       foreach ($admin_data as $admin) {
       	if ($admin->email==$email && $admin->password==$password) {
       		if ($admin->admin_type=='admin') {
       			$session_data=Session::put('admin_data',$admin_data);
       			return Redirect::to('/admin-home')->with('admin_data',$session_data);
       		}elseif ($admin->admin_type=='student') {
       			echo"this is student";
       		}
       	}else{
       		echo"wrong email or password";
       	}
       }
   }
}
