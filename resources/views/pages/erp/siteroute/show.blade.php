<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/siteroute/_show.blade.php" was generated by ProBot AI.
* Date: 5/12/2023 12:52:23 AM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Show SiteRoute')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('siteroutes.index')}}">Manage</a>
<table class='table table-striped text-nowrap'>
<tbody>
		<tr><th>Id</th><td>{{$siteroute->id}}</td></tr>
		<tr><th>Name</th><td>{{$siteroute->name}}</td></tr>
		<tr><th>Src</th><td>{{$siteroute->src}}</td></tr>
		<tr><th>Inactive</th><td>{{$siteroute->inactive}}</td></tr>
		<tr><th>Site Menu Id</th><td>{{$siteroute->site_menu_id}}</td></tr>

</tbody>
</table>
@endsection
@section('script')


@endsection
