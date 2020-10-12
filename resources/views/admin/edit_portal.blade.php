@extends('layouts.app')
@section('title','Edit Portal')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Portal</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Portal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              
              <div class="card-body">
                <div class="modal-body">
              <form action="{{url('admin/edit_portal_sub')}}" class="database_operation" >
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Enter Name</label>
                      {{csrf_field()}}
                      <input type="hidden"  name="id" value="{{$portal_info->id}}">
                      <input type="text" required="required" value="{{$portal_info->name}}" name="name" placeholder="Enter Name" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Enter E-Mail</label> 
                      <input type="text"  value="{{$portal_info->email}}" required="required" name="email" placeholder="Enter E-Mail" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Enter Mobile No</label> 
                      <input type="text" required="required" name="mobile_no" placeholder="Enter Mobile No" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Enter Password</label> 
                      <input type="password" name="password" placeholder="Enter Password" class="form-control">
                    </div>
                  </div>
                  
                  <div class="col-sm-12">
                    <div class="form-group">
                      <button class="btn btn-primary">Update</button>
                    </div>
                  </div>
                </div>
              </form>
              </div>
              <!-- /.card-body -->
              </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
  </div>
  
  @endsection