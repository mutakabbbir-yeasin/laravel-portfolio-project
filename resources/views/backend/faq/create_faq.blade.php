@extends('layouts.backend.admin_layout')
@section('content')
    
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">FAQs</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard </a></li>
            <li class="breadcrumb-item active">FAQs</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div>
  </div>
  <div class="container">
    <form action="{{route('admin.faq.store')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="form-group col-md-6">
                <div class="mb-3">
                    <label for="name"><h5>Question</h5></label>
                    <input type="text" class="form-control" id="question" name="question">
                </div>

                <div class="mb-3">
                    <label for="name"><h4>Answer</h4></label>
                    <textarea type="text" class="form-control" id="answer" name="answer"></textarea>
                </div>
            </div>
        </div>
        <input type="submit" name="submit" class="btn btn-primary mt-5">
      </div>
    </form>
  </div>
</div>
@endsection
    
  