<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class subjectController extends Controller
{
    public function add_subject()
    {
    	return view('admin.add_subject');
    }
    public function save_subject(Request $request)
    {
    	$request->validate([
    		'subject_name'=>'required|unique:tbl_subjects',
    	]);
    	$ext;
    	$part=$request->part;
    	if($part=='1'){
    		$ext='111';

    	}elseif ($part=='2') {
    		$ext='222';
    	}
    	elseif ($part=='3') {
    		$ext='333';
    	}
    	elseif ($part=='4') {
    		$ext='444';
    	}
    	elseif ($part=='5') {
    		$ext='555';
    	}
    	elseif ($part=='0') {
    		$ext='000';
    	}
    	$subject_name=$data['subject_name']=$request->subject_name;
        $data['subject_code']=strtoupper(substr($subject_name,0,3)).$ext;
        $data['created_at']=$request->created_at;
        // $data->validate([
        // 	'subject_code'=>'required|unique:tbl_subjects',
        // ]);         

         Subject::insert($data);
         Session::put('message','Subject Added Successfully');
        return Redirect::to('/add-subject');

         
    }
}
