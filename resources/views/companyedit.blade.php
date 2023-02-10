@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">
    <h1>Update Employee Page</h1>
  </div>
  <div class="card-body">
      
      <form action="{{route('saveupdatec')}}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" placeholder="Enter Company Name" name="updatename" id="updatename" class="form-control" value ="{{$update->name}}"></br>
        <label>Email</label></br>
        <input type="text" placeholder="Companyemail@email.com" name="updateemail" id="updateemail" class="form-control" value ="{{$update->email}}"></br>
        <label>Website</label></br>
        <input type="text" placeholder="ex. companywebsite.com" name="updatewebsite" id="updatewebsite" class="form-control" value ="{{$update->website}}"></br>
        <label>Logo</label></br>
        <input type="text" placeholder="sample logo" name="updatelogo" id="updatelogo" class="form-control" value ="{{$update->logo}}"></br>
        
        <input type="hidden" name="id" value="{{$update->id}}">

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop