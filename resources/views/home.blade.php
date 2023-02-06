@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Companies') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <p class="card-text">
                                <div class="row">
                                    <div class="col-md-3 col-sm-6 col-12">
                                                <div class="info-box shadow-none">
                                                  <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
                                    
                                                  <div class="info-box-content">
                                                    <span class="info-box-text">Shadows</span>
                                                    <span class="info-box-number">None</span>
                                                  </div>
                                                  <!-- /.info-box-content -->
                                                </div>
                                                <!-- /.info-box -->
                                              </div>
                                    </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection