<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/warehouse/_index.blade.php" was generated by ProBot AI.
* Date: 5/6/2023 11:30:14 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Manage Warehouse')
@section('style')


@endsection
@section('page')
<div class="content-header">
	<div class="container-fluid">
		<div class="content">
			<div class="container-fluid">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Manage Product</h3>

						<div class="card-tools">
							@if(session()->has('message'))
							<div class="alert alert-success">
								{{ session()->get('message') }}
							</div>
							@endif
							<div class="input-group input-group-sm">
								<input type="text" name="table_search" id="search" class="form-control float-right" placeholder="Search" onkeyup="search()">

								<div class="input-group-append">
									<button type="submit" class="btn btn-default" onkeyup="search()">
										<i class="fas fa-search"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body table-responsive p-0">
<a href="{{route('warehouses.create')}}" class="btn btn-primary m-2 p-2">New Warehouse</a>
<table class="table table-hover text-nowrap" id="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>City</th>
			<th>Contact</th>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($warehouses as $warehouse)
		<tr>
			<td>{{$warehouse->id}}</td>
			<td>{{$warehouse->name}}</td>
			<td>{{$warehouse->city}}</td>
			<td>{{$warehouse->contact}}</td>

			<td>
			<form action = "{{route('warehouses.destroy',$warehouse->id)}}" method = "post">
				<a class= 'btn btn-primary' href = "{{route('warehouses.show',$warehouse->id)}}">View</a>
				<a class= 'btn btn-success' href = "{{route('warehouses.edit',$warehouse->id)}}"> Edit </a>
				@method('DELETE')
				@csrf
				<input type = "submit" class="btn btn-danger" name = "delete" value = "Delete" />
			</form>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
@section('script')
<script>
	function search() {



		var search = document.getElementById('search').value.toLowerCase()

		var table = document.getElementById('table')


		var tr = table.getElementsByTagName('tr')


		for (i = 0; i < tr.length; i++) {

			var td = tr[i].getElementsByTagName('td')



			for (j = 0; j < td.length; j++) {
				var content = td[j].textContent.toLowerCase()

				if (content.indexOf(search) > -1) {
					tr[i].style.display = "";
					// tr[i].style.color = "green"

					break;


				} else {
					tr[i].style.display = "none";

				}

			}

		}



	}
</script>

@endsection
