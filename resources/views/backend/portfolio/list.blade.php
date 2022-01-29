
@extends('layouts.backend.admin_layout')
@section('content')
    
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">List of Portfolio</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard </a></li>
            <li class="breadcrumb-item active">List of Portfolio</li>
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
                  <th scope="col">Title</th>
                  <th scope="col">Catagory</th>
                  <th scope="col">Big_image</th>
                  <th scope="col">Small_image</th>
                  <th scope="col">Description</th>
                  <th scope="col">Client</th>
                  <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @if(count($portfolio) > 0)
            @foreach ($portfolio as $portfolio)
            <tr>
                <th scope="row">{{$portfolio ->id}}</th>
                <td>{{$portfolio ->title}}</td>
                <td>{{$portfolio ->catagory}}</td>
                <td>
                  <img style="height: 10vh"  src="{{url($portfolio->big_image)}}" alt="big_image">
                </td>
                <td>
                  <img style="height: 10vh"  src="{{url($portfolio->small_image)}}" alt="small_image">
                </td>
                <td>{{Str::limit(strip_tags($portfolio->description),30)}}</td>
                <td>{{$portfolio ->client}}</td>
                <td>
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <a href="{{route('admin.portfolio.edit', $portfolio->id)}}" class="btn btn-primary">Edit</a>
                    </div>
                    <div class="col-md-6 col-sm-6"> 
                      <form action="{{route('admin.portfolio.destroy', $portfolio->id)}}"    method="POST">
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

    {{-- @if (count ($portfolio) == 0)
      <div class="text-align-center">
        <p>Your portfolio table is empty.</p>
        <p>Let's create a portfolio</p>
        <a href="{{route('admin.portfolio.create')}}" class="btn btn-primary ">Create</a>
      </div>
    @endif --}}
</div>
@endsection
    
  