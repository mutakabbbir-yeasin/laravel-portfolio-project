
@extends('layouts.backend.admin_layout')
@section('content')
    
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Create</h1>
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
    <form action="{{route('admin.service.update', $service->id)}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="form-group col-md-6">
                <div class="mb-3">
                    <label for="icon"><h4>Font Awesome Icon</h4></label>
                    <input type="text" class="form-control" id="icon" name="icon" value="{{$service->icon}}">
                </div>
                <div class="mb-3">
                    <label for="title"><h5>Title</h5></label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$service->title}}">
                </div>

                <div class="mb-3">
                    <label for="description"><h4>Description</h4></label>
                    <textarea type="text" class="form-control" id="description" name="description">{{$service->description}}</textarea>
                </div>
            </div>
        </div>
        <input type="submit" name="submit" class="btn btn-primary mt-5" value="Update">
      </div>
    </form>
  </div>
</div>
@endsection
    
  