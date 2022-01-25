
@extends('layouts.backend.admin_layout')
@section('content')
    
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Home</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard </a></li>
            <li class="breadcrumb-item active">Home</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>
  <div class="container">
    <form action="{{route('admin.home.update')}}" method="POST" enctype="multipart/form-data">
      @csrf
      {{method_field('PUT')}}
      <div class="row">
        <div class="form-group col-md-5 mt-3">
          <h3>Background Image</h3>
          <img style="height: 35vh" src="{{url($home->bg_img)}}" alt="img" class="img-thumbnail">
          <input class="mt-3" type="file" id="bg_img" name="bg_img">
        </div>
        <div class="form-group col-md-6">
          <div class="mb-3">
            <label for="name"><h5>First Name</h5></label>
            <input type="text" class="form-control" id="first_name" name="first_name" value="{{$home->first_name}}">
          </div>

          <div class="mb-3">
            <label for="name"><h5>Last Name</h5></label>
            <input type="text" class="form-control" id="last_name" name="last_name" value="{{$home->last_name}}">
          </div>

          <div class="mb-3">
            <label for="name"><h5>Short Description</h5></label>
            <input type="text" class="form-control" id="short_description" name="short_description" value="{{$home->short_description}}">
          </div>

          <div class="mb-3">
            <label for="name"><h5>Phone Number</h5></label>
            <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{$home->phone_number}}">
          </div>

          <div class="mb-3">
            <label for="name"><h5>Email</h5></label>
            <input type="text" class="form-control" id="email" name="email" value="{{$home->email}}">
          </div>

          <div>
            <h5>Upload Resume</h5>
            <input type="file" name="resume" id="resume"><br>
            <input type="submit" name="submit" class="btn btn-primary mt-5 px-5" value="Upload">
          </div>
        </div>
      </div>
      
    </form>
  </div>
  
    
</div>
@endsection
    
  