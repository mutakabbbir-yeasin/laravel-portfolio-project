
@extends('layouts.backend.admin_layout')
@section('content')
    
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">List of FAQs</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard </a></li>
            <li class="breadcrumb-item active">List of FAQs</li>
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
                <th scope="col">Question</th>
                <th scope="col">Answer</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @if(count($faq) > 0)
            @foreach ($faq as $faq)
            <tr>
                <th scope="row">{{$faq ->id}}</th>
                <td>{{$faq ->question}}</td>
                <td>{{Str::limit(strip_tags($faq->answer),40)}}</td>
                <td>
                  <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <a href="#" class="btn btn-primary">Edit</a>
                    </div>
                    <div class="col-md-6 col-sm-6">
                      <form action="#"    method="POST">
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
    
  