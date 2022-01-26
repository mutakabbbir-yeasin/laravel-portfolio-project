
@extends('layouts.backend.admin_layout')
@section('content')
    
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Portfolio Create</h1>
        </div><!-- /.col -->
        <div class="col-sm-6"> 
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard </a></li>
            <li class="breadcrumb-item active">Create</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>
  <div class="container">
    <form action="{{route('admin.portfolio.store')}}" method="POST" enctype="multipart/form-data">
      @csrf
      {{method_field('PUT')}}
      <div class="row">
        <div class="form-group col-md-5 mt-3">
          <h3>Big Image</h3>
          <img style="height: 35vh" src="" alt="img" class="img-thumbnail">
          <input class="mt-3" type="file" name="big_image">
        </div>
        <div class="form-group col-md-5 mt-3">
          <h3>Small Image</h3>
          <img style="height: 20vh" src="" alt="img" class="img-thumbnail">
          <input class="mt-3" type="file" name="small_image">
        </div>
        <div class="form-group col-md-6">
          <div class="mb-3">
            <label for="name"><h5>Title</h5></label>
            <input type="text" class="form-control" name="title" value="">
          </div>

          <div class="mb-3">
            <label for="name"><h5>Catagory</h5></label>
            <input type="text" class="form-control" name="catagory" value="">
          </div>

          <div class="mb-3">
            <label for="description"><h4>Description</h4></label>
            <textarea type="text" class="form-control textbox" name="description"></textarea>
        </div>
          <div class="mb-3">
            <label for="name"><h5>Client</h5></label>
            <input type="text" class="form-control" name="client" value="">
          </div>
          <input type="submit" name="submit" class="btn btn-primary mt-3 px-5" value="Upload">
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
    
  