@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">
    <h1>Update Company Page</h1>
  </div>
  <div class="card-body">
      
      <form action="{{route('saveupdatec')}}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Company Name</label>
        <input type="text" placeholder="Enter Company Name" name="updatename" id="updatename" class="form-control" value ="{{$update->name}}">
        <label>Email</label>
        <input type="text" placeholder="Companyemail@email.com" name="updateemail" id="updateemail" class="form-control" value ="{{$update->email}}">
        <label>Website</label>
        <input type="text" placeholder="ex. companywebsite.com" name="updatewebsite" id="updatewebsite" class="form-control" value ="{{$update->website}}">
        <label>Logo</label><br>
        <input class="border border-gray-200 rounded p-2 w-full" type="file" name="updatelogo" id="updatelogo"><br><br> 
        
        <input type="hidden" name="id" value="{{$update->id}}">

        <input type="submit" value="Update" class="btn btn-success">
    </form>
   
  </div>
</div>
 
@stop