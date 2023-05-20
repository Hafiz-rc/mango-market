@extends('layout.erp.app')
@section('title','Manage UoM')

@section('page')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Manage Uom</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Manage Uom</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<div class="content">
    <div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Manage Uom</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
        <a class='btn btn-success' href="{{route('uoms.index')}}">Manage</a>

        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

           <form action="{{route('uoms.update',$uom)}}" method="post">
            @csrf
	        @method("PUT")
              <div>
                Name<br>
                <input type="text" name="name" value="{{$uom->name}}" />
              </div>
              <div>
                <input type="submit" name="submit" value="Update" />
              </div>
           </form>
        </div>
        <!-- /.card-body -->
    </div>
    </div>
</div>



@endsection