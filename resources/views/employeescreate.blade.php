@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">
    <h1>Create Employee Page</h1>
  </div>
  <div class="card-body">
      
      <form action="{{ route('addemployee') }}" method="post">
        {!! csrf_field() !!}
        <label>First Name <span style="color:red">*</span></label></br>
        <input type="text" placeholder="Enter Firstname" name="fname" id="fname" class="form-control" required></br>
        <label>Last Name <span style="color:red">*</span></label></br>
        <input type="text" placeholder="Enter Lastname" name="lname" id="lname" class="form-control" required></br>
        <label>Email</label></br>
        <input type="text" placeholder="Enteryouremail@email.com" name="email" id="email" class="form-control"></br>
        <label>Phone Number</label></br>
        <input type="text" placeholder="ex. 09123456789" name="phone" id="phone" class="form-control"></br>
        <label>Company ID</label></br>
        <input type="number" placeholder="Enter Company ID" value="#" name="companyid" id="companyid" class="form-control"></br>    
        <input type="submit" value="Create" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop