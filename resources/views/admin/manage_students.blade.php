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
            <h1 class="m-0 text-dark">Manage Students</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Students</li>
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
                  <a class="btn btn-info btn-sm" href="javascript:;" data-toggle="modal" data-target="#myModal">Add New</a>
                </div>
              </div>
              <div class="card-body">
                <table class="table table-striped table-bordered table-hover datatable">
                	<thead>
                    <tr>
                  		<th>#</th>
                  		<th>Name</th>
                  		<th>DOB</th>
                      <th>Exam</th>
                  		<th>Exam Date</th>
                      <th>Result</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                	</thead>
                	<tbody>
                		@foreach($students as $key => $std)
                      <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $std['name'] }}</td>
                        <td>{{ $std['dob'] }}</td>
                        <td>{{ $std['ex_name'] }}</td>
                        <td>{{ $std['exam_date'] }}</td>
                        <td>N/A</td>
                        <td><input type="checkbox" <?php if($std['status']==1) {echo "checked"; } ?> data-id="<?php echo $std['id'] ?>" name="status"></td>
                        <td>
                          <a href="{{ url('admin/edit_students/'.$std['id']) }}"class="btn btn-info">Edit</a>
                          <a href="{{ url('admin/delete_students/'.$std['id']) }}"class="btn btn-danger">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                	</tbody>
                	<tfoot>
                		<tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>DOB</th>
                      <th>Exam</th>
                      <th>Exam Date</th>
                      <th>Result</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr> 
                	</tfoot>
                </table>
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
    <!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">

	  <!-- Modal content-->
	  <div class="modal-content">
	    <div class="modal-header">
	      <h4 class="modal-title">Add New Student</h4>
	      <button type="button" class="close" data-dismiss="modal">&times;</button>
	    </div>
	    <div class="modal-body">
	    <form action="{{url('admin/ ')}}" class="database_operation" >
	      <div class="row">
	      	<div class="col-sm-12">
	      		<div class="form-group">
	      			<label>Enter Name</label>
	      			{{csrf_field()}}
	      			<input type="text" required="required" name="name" placeholder="Enter Name" class="form-control">
	      		</div>
	      	</div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Enter E-Mail</label>
              {{csrf_field()}}
              <input type="text" required="required" name="email" placeholder="Enter E-Mail" class="form-control">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Enter Mobile No</label>
              {{csrf_field()}}
              <input type="text" required="required" name="mobile_no" placeholder="Enter Mobile No" class="form-control">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Select DOB</label>
              <input type="date" required="required" name="dob" class="form-control">
            </div>
          </div>
          <div class="col-sm-12">
            <div class="form-group">
              <label>Select Exam</label>
              <select class="form-control" name="exam" required="required">
                <option value="">Select</option> 
                  @foreach($exams as $exam)
                    <option value="{{$exam['id']}}">{{$exam['title']}}</option>
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
	      			<button class="btn btn-primary">Add</button>
	      		</div>
	      	</div>
	      </div>
	    </form>  
	    </div>
	    </div>
	  
	</div>
	</div>

  @endsection