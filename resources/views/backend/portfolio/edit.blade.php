
@extends('layouts.backend.admin_layout')
@section('content')
    
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Edit</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard </a></li>
            <li class="breadcrumb-item active">Edit</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>
  <div class="container">
    <form action="{{route('admin.portfolio.update', $portfolio->id)}}" method="POST" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="row">
        <div class="col-md-5">
          <div class="row">
            <div class="form-group mt-3">
              <h3>Big Image</h3>
              <img style="height: 35vh" src="{{url($portfolio->big_image)}}" alt="big_image" class="img-thumbnail">
              <input class="mt-3" type="file" name="big_image">
            </div>
            <div class="form-group mt-3">
              <h3>Small Image</h3>
              <img style="height: 20vh" src="{{url($portfolio->small_image)}}" alt="small_image" class="img-thumbnail">
              <input class="mt-3" type="file" name="small_image">
            </div>
          </div>
        
      </div>
      <div class="col-md-7">
        <div class="form-group ">
          <div class="mb-3">
            <label for="name"><h5>Title</h5></label>
            <input type="text" class="form-control" name="title" value="{{$portfolio->title}}">
          </div>

          <div class="mb-3">
            <label for="name"><h5>Catagory</h5></label>
            <input type="text" class="form-control" name="catagory" value="{{$portfolio->catagory}}">
          </div>

          <div class="mb-3">
            <label for="description"><h4>Description</h4></label>
            <textarea type="text" class="form-control textbox" name="description">{{$portfolio->description}}</textarea>
        </div>
          <div class="mb-3">
            <label for="name"><h5>Client</h5></label>
            <input type="text" class="form-control" name="client" value="{{$portfolio->client}}">
          </div>
        </div>
        </div>
        <input type="submit" name="submit" class="btn btn-primary m-5 px-5" value="Upload">
      </div>
    </form>
  </div>
    </form>
  </div>
</div>
@endsection
    
  