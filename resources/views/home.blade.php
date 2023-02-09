@extends('layouts.app')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Companies') }}
                      
                      <button type="button" class="btn btn-outline-primary btn-lg">
                        <i class="fa fa-plus" aria-hidden="true">
                        <i class="fa fa-building" aria-hidden="true">
                          </i></i></button>

                      <button type="button" class="btn btn-outline-primary btn-lg">
                        <i class="fa fa-plus" aria-hidden="true">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        </i>
                      </button>
                    </h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @foreach($companies as $comp)
                <div class="accordion w-100" id="companyAccordion">
                    
                  <div class="card">
                      <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapse{{$comp->name}}" aria-expanded="true" aria-controls="collapseOne">
                            <img src="{{$comp->logo}}" class="float-right">
                            <h3>{{$comp->name}}</h3>                         
                          <p><strong>Email:</strong> {{$comp->email}}</p>
                          <p><strong>Website:</strong> {{$comp->website}}</p>
                      </div>
                      <div class="ml-2 mt-2">
                        <p><strong>Actions: </strong>
                          <button type="button" class="btn btn-outline-warning btn-sm">Edit</button>
                          <button type="button" class="btn btn-outline-danger btn-sm">Delete</button></p>
                        </div>
                      <div id="collapse{{$comp->name}}" class="collapse" aria-labelledby="headingOne" data-parent="#companyAccordion">
                        <div class="card-body">
                          <h3>Employees</h3>
                          <ul>                           
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Company ID</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                @foreach($employees as $emp)
                                <tbody>
                                  <tr>
                                    <td>{{$emp->id}}</td>
                                    <td>{{$emp->fname}}</td>
                                    <td>{{$emp->lname}}</td>
                                    <td>{{$emp->email}}</td>
                                    <td>{{$emp->phone}}</td>
                                    <td>{{$emp->company}}</td>
                                    <td>
                                      <button type="button" class="btn btn-primary btn-sm">View Profile</button>
                                      <button type="button" class="btn btn-outline-warning btn-sm">Edit</button>
                                      <button type="button" class="btn btn-outline-danger btn-sm">Delete</button>
                                    </td>
                                  </tr>
                                </tbody>
                                @endforeach
                              </table>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                @endforeach
                  
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection