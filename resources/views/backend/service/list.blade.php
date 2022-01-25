
@extends('layouts.backend.admin_layout')
@section('content')
    
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">List of Services</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard </a></li>
            <li class="breadcrumb-item active">List of Services</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>
  <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Icon</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(count($service) > 0)
            @foreach ($service as $service)
            <tr>
                <th scope="row">{{$service ->id}}</th>
                <td>{{$service ->icon}}</td>
                <td>{{$service ->title}}</td>
                <td>{{Str::limit(strip_tags($service->description),40)}}</td>
                <td>
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <a href="{{route('admin.service.edit', $service->id)}}" class="btn btn-primary">Edit</a>
                    </div>
                    <div class="col-md-6 col-sm-6"> 
                      <form action="{{route('admin.service.destroy', $service->id)}}"    method="POST">
                        {{csrf_field()}}
                        @method('DELETE')
                        <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                    </form>
                    </div>
                  </div>
                </td>
            </tr>
            @endforeach
            @endif
            
            </tbody>
        </table>
    </div>
</div>
@endsection
    
  