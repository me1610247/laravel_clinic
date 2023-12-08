@extends('admin.layouts.app')
@section('title','Edit Major')
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-11">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Major</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="">
          <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Doctor Name</label>
                <input type="text" name="Dname" class="form-control" id="exampleInputEmail1">
              </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Doctor Major</label>
                <input type="text" name="major" class="form-control" id="exampleInputEmail1" >
              </div>
            <div class="form-group">
                <label for="exampleInputEmail1">User Name</label>
                <input type="text" name="Uname" class="form-control" id="exampleInputEmail1">
              </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Date</label>
                <input type="text" name="date" class="form-control" id="exampleInputEmail1" >
              </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select name="status" class="form-control" id="">
                    <option disabled selected>Choose Status</option>
                    <option value="1">Pending</option>
                    <option value="0">Accepted</option>
                    <option value="2">Rejected</option>
                </select>
              </div>
           
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Update</button>
          </div>
        </form>
      </div>
@stop