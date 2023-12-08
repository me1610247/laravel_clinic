@extends('admin.layouts.app')
@section('title','Contact')
@section('content')
<div class="card-body">
    <form>
      <div class="row">
        <div class="col-sm-12">
          <!-- text input -->
          <div class="form-group">
            <label>Text</label>
            <input type="text" class="form-control" placeholder="Enter Your Name">
          </div>
        </div>
       
      </div>
      <div class="row">
        <div class="col-sm-12">
          <!-- text input -->
          <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" placeholder="Enter Your Email">
          </div>
        </div>
       
      </div>
      <div class="row">
        <div class="col-sm-12">
          <!-- text input -->
          <div class="form-group">
            <label>Phone</label>
            <input type="number" class="form-control" placeholder="Enter Your Phone">
          </div>
        </div>
       
      </div>
      
      <div class="row">
        <div class="col-sm-4">
          <!-- textarea -->
          <div class="form-group">
            <label>Message</label>
            <textarea class="form-control" rows="6" placeholder="Enter Message"></textarea>
          </div>
        </div>
       
      </div>

      <!-- input states -->
  
      </div>
    </form>
  </div>
@stop