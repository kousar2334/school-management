<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Admin;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class adminController extends Controller
{
     public function user()
    {
        return view('public.layout');
    }
     public function index()
    {
    	return view('admin.home');
    }
    public function add_admin()
    {
    	return view('admin.add_admin');
    }
    public function save_admin(Request $request)
    {
    	$request->validate([
            'first_name'=>'required',
            'image'=>'nullable|image|max:1000',
            'email'=>'required|unique:tbl_admin',
            'phone'=>'required|unique:tbl_admin',
        ]);
        $image=$request->File('image');
        $new_name=rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path("image"),$new_name);
        $data=array();
        $data['first_name']=$request->first_name;
        $data['last_name']=$request->last_name;
        $email=$data['email']=$request->email;
        $phone=$data['phone']='0'.$request->phone;
        $data['sex']=$request->sex;
        $data['image']=$new_name;
        $data['created_at']=$request->created_at;
        $data['password']=$email.$phone;
        Admin::insert($data);
        Session::put('message','Admin Added Successfully');
        return Redirect::to('/add-admin');
    }
    public function all_admin()
    {
        $all_admin=Admin::get();
        return view('admin.all_admin')->with('all_admin',$all_admin);
    }
}
