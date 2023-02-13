@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">
    <h1>Update Employee Page</h1>
  </div>
  <div class="card-body">
      
      <form action="{{route('saveupdate')}}" method="post">
        {!! csrf_field() !!}
        <label>First Name <span style="color:red">*</span></label></br>
        <input type="text" placeholder="Enter Firstname" name="updatefname" id="updatefname" class="form-control" value ="{{$update->fname}}" required></br>
        <label>Last Name <span style="color:red">*</span></label></br>
        <input type="text" placeholder="Enter Lastname" name="updatelname" id="updatelname" class="form-control" value ="{{$update->lname}}"required></br>
        <label>Email <span style="color:red">*</span></label></br>
        <input type="text" placeholder="Enteryouremail@email.com" name="updateemail" id="updateemail" class="form-control" value ="{{$update->email}}" required></br>
        <label>Phone Number <span style="color:red">*</span></label></br>
        <input type="text" placeholder="ex. 09123456789" name="updatephone" id="updatephone" class="form-control" value ="{{$update->phone}}" required></br>
        <label>Company ID <span style="color:red">*</span></label></br>
        <input type="number" placeholder="Enter Company ID" name="updatecompanyid" id="updatecompanyid" class="form-control" value ="{{$update->company}}" required></br>
        
        <input type="hidden" name="id" value="{{$update->id}}">

        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop