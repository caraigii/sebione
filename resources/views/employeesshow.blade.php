@extends('layouts.app')
@section('content')
 
<div class="card mx-auto">
  <div class="card-header">
    <h1>{{$show->fname}} {{$show->lname}}</h1>
  </div>
  <div class="card-body">
        <h3><strong>Bio</strong></h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut 
          aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu 
          fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit 
          anim id est laborum.
        </p>
        <h3><strong>Contact</strong></h3>
        <label>Email: </label><p>{{$show->email}}</p>
        <label>Phone: </label><p>{{$show->phone}}</p>
  </div>
</div>
 
@stop