@extends('layout.erp.app')
@section('title','Manage UoM')

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
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" id="search" class="form-control float-right" placeholder="Search" onkeyup="search()">

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
                <a class='btn btn-primary m-4 pl-4 pr-4' href="{{route('uoms.create')}}">Create UoM</a>
                <table class="table table-hover text-nowrap" id="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($uoms as $uom)
                        <tr>
                            <td>{{$uom->id}}</td>
                            <td>{{$uom->name}}</td>
                            <td>

                                <form action="{{route('uoms.destroy',$uom->id)}}" method="post">
                                    <a class='btn btn-primary' href="{{route('uoms.show',$uom->id)}}">View</a>
                                    <a class='btn btn-success' href="{{route('uoms.edit',$uom->id)}}">Edit</a>
                                    @method('DELETE')
                                    @csrf
                                    <input type="submit" class="btn btn-danger" name="delete" value="Delete" />
                                </form>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>

                </table>
                {{$uoms->links()}}
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>



@endsection

@section('script')

<script>
        function search() {

            

            var search = document.getElementById('search').value

            var table = document.getElementById('table')
         

            var tr = table.getElementsByTagName('tr')
           
            
            for (i = 0; i < tr.length; i++) {

                var td = tr[i].getElementsByTagName('td')
                
                

                for (j = 0; j < td.length; j++) {
                    var content = td[j].textContent

                    if (content.indexOf(search) > -1) {
                        tr[i].style.display = "";
                        // tr[i].style.color="green"

                        break;


                    } else {
                        tr[i].style.display = "none";

                    }
                    
                }

            }

            

        }
    </script>

@endsection