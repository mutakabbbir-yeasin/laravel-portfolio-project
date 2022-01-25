@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible" style=" width:800px; margin-left: 250px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error!</strong>{{$error}}
        </div>
    @endforeach
@endif


@if (session('error'))
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible" style=" width:800px; margin-left: 250px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error!</strong>{{session('error')}}
        </div>
    @endforeach
@endif


@if (session('success'))
    <div class="alert alert-success alert-dismissible" style=" width:800px; margin-left: 250px;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong>{{session('success')}}
    </div>
@endif


