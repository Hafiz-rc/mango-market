<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/supplier/_show.blade.php" was generated by ProBot AI.
* Date: 5/4/2023 8:17:01 PM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Show Supplier')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('suppliers.index')}}">Manage</a>
<table class='table table-striped text-nowrap'>
<tbody>
		<tr><th>Id</th><td>{{$supplier->id}}</td></tr>
		<tr><th>Name</th><td>{{$supplier->name}}</td></tr>
		<tr><th>Mobile</th><td>{{$supplier->mobile}}</td></tr>
		<tr><th>Email</th><td>{{$supplier->email}}</td></tr>

</tbody>
</table>
@endsection
@section('script')


@endsection