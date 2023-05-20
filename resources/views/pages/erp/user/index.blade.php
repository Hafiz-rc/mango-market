
@extends('layout.erp.app')
@section('title','Manage User')
@section('style')


@endsection
@section('page')
<a class="btn btn-primary" href="{{route('users.create')}}">New User</a>
<table class="table table-hover text-nowrap ">
	<thead>
		<tr>
			<th>Id</th>
			<th>Username</th>
			<th>Role Id</th>
			<th>Full Name</th>
			<th>Photo</th>
			<th>Inactive</th>
			<th>Mobile</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($users as $user)
		<tr>
			<td>{{$user->id}}</td>
			<td>{{$user->username}}</td>
			<td>{{$user->role_id}}</td>
			<td>{{$user->full_name}}</td>
			<td><img src="{{asset('img/'.$user->photo)}}" width="70 px" /></td>
			<td>{{$user->inactive}}</td>
			<td>{{$user->mobile}}</td>

			<td>
			<form action = "{{route('users.destroy',$user->id)}}" method = "post">
				<a class= 'btn btn-primary' href = "{{route('users.show',$user->id)}}">View</a>
				<a class= 'btn btn-success' href = "{{route('users.edit',$user->id)}}"> Edit </a>
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
