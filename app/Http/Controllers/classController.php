<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClassModel;
use Session;
session_start();
class classController extends Controller
{
   public function add_class()
   {
   	return view('admin.add_class');
   }
   public function save_class(Request $request)
   {
      $request->validate([
         'class_name'=>'required|unique:tbl_class'
      ]);
   $data=array();
   $data['class_name']=$request->class_name;
   ClassModel::insert($data);
   Session::put('message','Class Name Added Successfully');
   return view('admin.add_class');
   }
}
