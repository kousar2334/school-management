@extends('admin.layout')
@section('content')
<div class="col-md-12 graphs">
  <div class="xs">
  	    <h3>Add Admin</h3>
         @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
             @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
             @endforeach
            </ul>
          </div>
         @endif
         <p style="color:green">
         <?php 
         if($message=Session::get('message')){
          echo $message;
          Session::put('message',NULL);
         }
          
         
         ?></p>
  	    <div class="well1 white">
        <form method="post" action="{{URL::to('/save-admin')}}" enctype="multipart/form-data">
          {{ csrf_field() }}
          <fieldset>
            <div class="form-group">
              <label class="control-label"><b>First Name</b></label>
              <input type="text" class="form-control1" name="first_name">
            </div>
            <div class="form-group">
              <label class="control-label"><b>Last Name</b></label>
              <input type="text" class="form-control1" name="last_name">
            </div>
            <div class="form-group">
              <label class="control-label"><b>Email</b></label>
              <input type="email" class="form-control1" name="email">
            </div>
            <div class="form-group">
              <label class="control-label"><b>Mobile</b></label>
              <input type="text" class="form-control1" name="phone">
            </div>
            <div class="form-group">
              <label class="control-label"><b>Sex</b></label>
              <select name="sex" class="form-control1">
                <option value="male">Male</option>
                <option value="female">Female</option>
                
              </select>
            </div>
              <div class="form-group">
              <label class="control-label"><b>Image</b></label>
              <input type="file" class="form-control1" name="image">
            </div>
             <input type="hidden" name="created_at" value="{{ date("Y-m-d H:i:s")}}">
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Save Admin</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>   
    </div>         
@endsection