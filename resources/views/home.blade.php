@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

@endsection


@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Companies') }}
                      

                      {{-- add company --}}
                      <a href="{{ route('tocreateComp') }}" type="button" class="btn btn-outline-primary btn-lg">
                        <i class="fa fa-plus" aria-hidden="true">
                        <i class="fa fa-building" aria-hidden="true">
                          </i></i>
                        </a>


                      {{-- add employee --}}
                      <a href="{{ route('tocreateEmp') }}" type="button" class="btn btn-outline-primary btn-lg">
                        <i class="fa fa-plus" aria-hidden="true">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        </i>
                      </a>
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
              @if($companies)
                @foreach($companies as $comp)
                <div class="accordion w-100" id="companyAccordion">
                    
                  <div class="card">
                      <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapse{{$comp->id}}" aria-expanded="true" aria-controls="collapseOne">
                        
                          <img src="{{$comp->logo ? asset('storage/'.$comp->logo) : asset('images/no-image.jpg')}}" class="float-right" style="width:100px; height:100px">

                            <h3>{{$comp->name}}</h3>                         
                          <p><strong>Email:</strong> {{$comp->email}}</p>
                          <p><strong>Website:</strong> {{$comp->website}}</p>
                          <p><strong>CompanyID:</strong> {{$comp->id}}</p>
                      </div>
                      <div class="ml-2 mt-2">
                        <p><strong>Actions: </strong>
                          <a href="{{route('updatecompany', $comp->id)}}" type="button" class="btn btn-outline-warning btn-sm">Edit</a>
                          <a href="{{route('deletecompany', $comp->id)}}" type="button" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this company?')">Delete</a>
                          {{-- add employee --}}
                          <a href="/home/employeescreate1/{{$comp->id}}" type="button" class="btn btn-outline-primary btn-sm">
                            Add Employee           
                          </a>
                        </p>
                        </div>
                      <div id="collapse{{$comp->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#companyAccordion">
                        <div class="card-body">
                          <h3>Employees</h3><hr>
                          <ul>                           
                            <table class="table" id="employees-{{ $comp->id }}">
                                <thead>
                                  <tr>
                                    <th>ID</th>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>

                                <tbody>
                                @if($employees)
                                @foreach($employees as $emp)
                                @if($comp->id === $emp->company)
                          
                                  <tr>
                                    <td>{{$emp->id}}</td>
                                    <td>{{$emp->fname}}</td>
                                    <td>{{$emp->lname}}</td>
                                    <td>
                                      <a href="{{ route('showemployee', $emp->id) }}" type="button" class="btn btn-primary btn-sm">View Profile</a>
                                      <a href="{{ route('updateemployee', $emp->id) }}" type="button" class="btn btn-outline-warning btn-sm">Edit</a>
                                      <a href="{{ route('deleteemployee', $emp->id) }}" type="button" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</a>
                                    </td>
                                  </tr>
                                
                                @endif
                                @endforeach
                                @endif
                              </tbody>

                              </table>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>

                  
                @endforeach
                @endif
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
    <div class="d-flex justify-content-center align-items-center">
      {{ $companies->links() }}
  </div>
@endsection



@section('scripts')
    <script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js" defer></script>
    <script defer>
        $(document).ready( function () {
            @foreach($companies as $company)
                $('#employees-{{ $company->id }}').DataTable({
                    rowReorder: {
                        selector: 'td:nth-child(2)'
                    },
                    responsive: true
                });
            @endforeach
        } );
    </script>


@if (Session::has('success'))
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": true,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        toastr.success("{{Session()->get('success')}}")
    </script>
@endif


@endsection

