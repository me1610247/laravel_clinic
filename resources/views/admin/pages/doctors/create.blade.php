@extends('admin.layouts.app')
@section('title','Create Doctor')
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-11">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Create Doctor</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="POST" action="" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" 
              placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Major</label>
              <input type="text" name="major" class="form-control" id="exampleInputEmail1" 
              placeholder="Enter Major">
            </div>
            
            <div class="form-group">
              <label for="exampleInputFile">Image</label>
              <div class="input-group">
                <div class="custom-file">
                  <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select name="status" class="form-control" id="">
                    <option disabled selected>Choose Status</option>
                    <option value="1">Active</option>
                    <option value="0">Hidden</option>
                </select>
              </div>
           
          </div>
          <!-- /.card-body -->

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
@stop