@extends('layout.erp.app')
@section('title','Details UoM')

@section('style')
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table,
    td,
    th {
        border: 1px solid lightgray;
    }
    th{
        width: 150px;
    }

    td,
    th {
        padding: 5px;
        
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .action-wrap {
        display: flex;
        justify-content: space-between;
    }
</style>
@endsection

@section('page')

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Details Uom</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Details Uom</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<div class="content">
    <div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Details Uom</h3>

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
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>ID</th>
                        <td>{{$uom->id}}</td>                   
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{$uom->name}}</td>                   
                    </tr>
                </thead>
                <tbody>
                   
                
                </tbody>
              
            </table>
           
        </div>
        <!-- /.card-body -->
    </div>
    </div>
</div>



@endsection