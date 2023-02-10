@extends('layouts.app')
@section('content')
 
<div class="card">
  <div class="card-header">
    <h1>Create Company Page</h1>
  </div>
  <div class="card-body">
      
      <form action="{{ route('addcompany') }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <label>Name <span style="color:red">*</span></label><br>
        <input type="text" placeholder="Enter Company Name" name="name" id="name" class="form-control" required><br>
        <label>Email</label><br>
        <input type="text" placeholder="Entercompanyemail@email.com" name="email" id="email" class="form-control"><br>
        <label>Website</label><br>
        <input type="text" placeholder="ex. yourwebsitehere.com" name="website" id="website" class="form-control"><br>  
        <label>Logo</label><br>
        <input class="border border-gray-200 rounded p-2 w-full" type="file" name="logo" id="logo"><br><br>    
        <input type="submit" value="Create" class="btn btn-success"><br><br>
    </form>
   
  </div>
</div>
 
@stop