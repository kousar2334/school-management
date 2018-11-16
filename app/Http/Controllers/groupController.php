<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class groupController extends Controller
{
    public function add_group()
    {
    	return view('admin.add_group');
    }
    public function save_group(Request $request)
    {
    	$request->validate([
    		'group_name'=>'required| unique:tbl_group',
    	]);
    	$data=array();
    	$data['group_name']=$request->group_name;
    	Group::insert($data);
    	Session::put('message','Group Added Successfully');
    	return Redirect::to('/add-group');

    }
}
