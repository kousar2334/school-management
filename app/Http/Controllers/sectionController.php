<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Section;
use Session;
session_start();

class sectionController extends Controller
{
    public function add_section()
    {
    	return view('admin.add_section');
    }

    public function save_section(Request $request)
    {
    	$request->validate([
    		'section_name'=>'required| unique:tbl_section',
    	]);
    	$data=array();
    	$data['section_name']=$request->section_name;
    	Section::insert($data);
    	Session::put('message','Section added successfully');
    	return Redirect::to('add-section');

    }
}
