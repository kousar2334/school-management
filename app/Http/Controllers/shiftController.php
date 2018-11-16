<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shift;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class shiftController extends Controller
{
    public function add_shift()
    {
    	return view('admin.add_shift');
    }
    public function save_shift(Request $request)
    {
    	$request->validate([
    		'shift_name'=>'required | unique:tbl_shift',
    	]);
    	$data=array();
    	$data['shift_name']=$request->shift_name;
    	$data['created_at']=$request->created_at;
    	Shift::insert($data);
    	Session::put('message','Shift Added Successfully');
    	return Redirect::to('/add-shift');
    }
}
