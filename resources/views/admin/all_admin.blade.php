@extends('admin.layout')
@section('content')

<h2>All Admin Info</h2>
<table style="width:100%">
  <tr>
  	 <th>Sl No.</th>
    <th>Image</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Join Date</td>
    <th>Action</th>
  </tr>
 @foreach($all_admin as $admin)
  <tr>
    <td>1</td>
     <td><img src="{{ URL::to('/image') }}/{{ $admin->image}}" style="width:60px;height:50px;padding:0px"></td>
     <td>{{ $admin->first_name.' '.$admin->last_name}}</td>
     <td>{{ $admin->email }}</td>
     <td>{{ $admin->phone}}</td>
     <td>{{ $admin->created_at}}</td>
     <td>
     	<a href=""><i class="fa fa-eye"></i></a>
     	<a href=""><i class="fa fa-edit"></i></a>
      <a href=""><span class="glyphicon glyphicon-trash"></span></a>
     </td>
  </tr>

@endforeach
</table>

@endsection