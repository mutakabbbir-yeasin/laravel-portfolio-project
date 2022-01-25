
@extends('layouts.backend.admin_layout')
@section('content')
    
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">About Me</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.about')}}">Dashboard </a></li>
            <li class="breadcrumb-item active">About Me</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>
  <div class="container">
    <form action="{{route('admin.about.update')}}" method="POST" enctype="multipart/form-data">
      @csrf
      {{method_field('PUT')}}
      <div class="row">
        <div class="form-group col-md-5 mt-3">
          <h3>My Image</h3>
          <img style="height: 35vh" src="{{url($about->my_img)}}" alt="img" class="img-thumbnail">
          <input class="mt-3" type="file" id="my_img" name="my_img">
        </div>
        <div class="form-group col-md-6">
          <div class="mb-3">
            <label for="name"><h5>Designation</h5></label>
            <input type="text" class="form-control" id="designation" name="designation" value="{{$about->designation}}">
          </div>

          <div class="mb-3">
            <label for="name"><h5>Description</h5></label>
            <textarea type="text" class="form-control" id="description" name="description">{{$about->description}}</textarea>
          </div>

          <div class="mb-3">
            <label for="name"><h5>Name</h5></label>
            <input type="text" class="form-control" id="name" name="name" value="{{$about->name}}">
          </div>

          <div class="mb-3">
            <label for="name"><h5>Address</h5></label>
            <input type="text" class="form-control" id="address" name="address" value="{{$about->address}}">
          </div>

          <div class="mb-3">
            <label for="name"><h5>Whatsapp Number</h5></label>
            <input type="number" class="form-control" id="whatsapp" name="whatsapp" value="{{$about->whatsapp}}">
          </div>

          <div class="mb-3">
            <label for="name"><h5>Date of Borth</h5></label>
            <input type="text" class="form-control" id="dob" name="dob" value="{{$about->dob}}">
          </div>

          <div class="mb-3">
            <label for="name"><h5>Email</h5></label>
            <input type="text" class="form-control" id="email" name="email" value="{{$about->email}}">
          </div>

          <div class="mb-3">
            <label for="name"><h5>Skype</h5></label>
            <input type="number" class="form-control" id="skype" name="skype" value="{{$about->skype}}">
          </div>

          <div class="mb-3">
            <label for="name"><h5>Working Hours</h5></label>
            <input type="number" class="form-control" id="hours" name="hours" value="{{$about->hours}}">
          </div>

          <div class="mb-3">
            <label for="name"><h5>Total projects</h5></label>
            <input type="number" class="form-control" id="projects" name="projects" value="{{$about->projects}}">
          </div>

          <div class="mb-3">
            <label for="name"><h5>Years Journey</h5></label>
            <input type="number" class="form-control" id="years" name="years" value="{{$about->years}}">
          </div>

          <div class="mb-3">
            <label for="name"><h5>Total Client</h5></label>
            <input type="number" class="form-control" id="client" name="client" value="{{$about->client}}">
          </div>
        </div>
        <input type="submit" name="submit" class="btn btn-primary mt-5 px-5" value="Upload">
      </div>
      
    </form>
  </div>
  
    
</div>
@endsection
    
  