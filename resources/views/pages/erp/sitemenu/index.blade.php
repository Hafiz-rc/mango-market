<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/sitemenu/_index.blade.php" was generated by ProBot AI.
* Date: 5/8/2023 3:53:13 PM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Manage SiteMenu')
@section('style')


@endsection
@section('page')
<a href="{{route('sitemenus.create')}}">New SiteMenu</a>
<table class="table table-hover text-nowrap">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Link</th>
			<th>Has Child</th>
			<th>Inactive</th>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($sitemenus as $sitemenu)
		<tr>
			<td>{{$sitemenu->id}}</td>
			<td>{{$sitemenu->name}}</td>
			<td>{{$sitemenu->link}}</td>
			<td>{{$sitemenu->has_child}}</td>
			<td>{{$sitemenu->inactive}}</td>

			<td>
			<form action = "{{route('sitemenus.destroy',$sitemenu->id)}}" method = "post">
				<a class= 'btn btn-primary' href = "{{route('sitemenus.show',$sitemenu->id)}}">View</a>
				<a class= 'btn btn-success' href = "{{route('sitemenus.edit',$sitemenu->id)}}"> Edit </a>
				@method('DELETE')
				@csrf
				<input type = "submit" class="btn btn-danger" name = "delete" value = "Delete" />
			</form>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@endsection
@section('script')

@endsection
