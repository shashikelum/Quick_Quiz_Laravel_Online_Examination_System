@extends('layouts.app')
@section('title','Manage Students')
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Students</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Students</li>
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
              <div class="card-header">
                

                <div class="card-tools">
                  
                </div>
              </div>
              <div class="card-body">
                <form action="{{url('admin/edit_students_final')}}" class="database_operation" >
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Enter Name</label>
                      {{csrf_field()}}
                      <input type="hidden" name="id" value="{{$students->id}}">
                      <input type="text" value="{{$students->name}}" required="required" name="name" placeholder="Enter Name" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Enter E-Mail</label>
                      {{csrf_field()}}
                      <input type="text" value="{{$students->email}}" required="required" name="email" placeholder="Enter E-Mail" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Enter Mobile No</label>
                      {{csrf_field()}}
                      <input type="text" value="{{$students->mobile_no}}" required="required" name="mobile_no" placeholder="Enter Mobile No" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Select DOB</label>
                      <input type="date" value="{{$students->dob}}" required="required" name="dob" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Select Exam</label>
                      <select class="form-control" name="exam" required="required">
                        <option value="">Select</option> 
                          @foreach($exams as $exam)
                            <option <?php if($students->exam==$exam['id']){echo "selected";} ?> value="{{$exam['id']}}">{{$exam['title']}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>Enter Password</label>
                      <input type="password" required="required" name="password" placeholder="Enter Password" class="form-control">
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
    <!-- /.content -->
  
	  
	</div>
	</div>

  @endsection