@extends('admin.layout')
@section('content')
<div class="col-md-12 graphs">
  <div class="xs">
  	    <h3>Add Subject</h3>
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
        <form method="post" action="{{URL::to('/save-subject')}}">
          {{ csrf_field() }}
          <fieldset>
            <div class="form-group">
              <label class="control-label"><b>Subject Name</b></label>
              <input type="text" class="form-control1" name="subject_name">
            </div>
            <div class="form-group">
              <label class="control-label"><b>Part</b></label>
              <select name="part" class="form-control1">
                <option value="0">Select part</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>

             <input type="hidden" name="created_at" value="{{ date("Y-m-d H:i:s")}}">
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </fieldset>
        </form>
      </div>
    </div>   
    </div>         
@endsection