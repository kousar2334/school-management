@extends('admin.layout')
@section('content')
<div class="col-md-12 graphs">
  <div class="xs">
  	    <h3>Add Shift</h3>
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
        <form method="post" action="{{URL::to('/save-shift')}}">
          {{ csrf_field() }}
          <fieldset>
            <div class="form-group">
              <label class="control-label"><b>Shift Name</b></label>
              <input type="text" class="form-control1" name="shift_name">
            </div>

          <input type="hidden" name="created_at" value="{{ date("Y-m-d H:i:s")}}">
            <input type="date" name="">
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>   
    </div>         
@endsection