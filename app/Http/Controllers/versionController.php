<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Version;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();
class versionController extends Controller
{
    public function add_version()
    {
    	return view('admin.add_version');
    }

    public function save_version(Request $request)
    {
    	$request->validate([
    		'version_name'=>'required| unique:tbl_version',
    	]);
    	$data=array();
    	$data['version_name']=$request->version_name;
    	$data['created_at']=$request->created_at;
    	Version::insert($data);
    	Session::put('message','Version Added Successfully');
    	return Redirect::to('/add-version');
    }
}
