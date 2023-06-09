<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/purchase/_index.blade.php" was generated by ProBot AI.
* Date: 5/4/2023 9:17:54 PM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Manage Purchase')
@section('style')


@endsection
@section('page')
<a href="{{route('purchases.create')}}">New Purchase</a>
<table class="table table-hover text-nowrap">
	<thead>
		<tr>
			<th>Id</th>
			<th>Supplier Id</th>
			<th>Purchase Date</th>
			<th>Delivery Date</th>
			<th>Shipping Address</th>
			<th>Purchase Total</th>
			<th>Paid Amount</th>
			<th>Remark</th>
			<th>Status Id</th>
			<th>Discount</th>
			<th>Vat</th>

			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	@foreach($purchases as $purchase)
		<tr>
			<td>{{$purchase->id}}</td>
			<td>{{$purchase->supplier_id}}</td>
			<td>{{$purchase->purchase_date}}</td>
			<td>{{$purchase->delivery_date}}</td>
			<td>{{$purchase->shipping_address}}</td>
			<td>{{$purchase->purchase_total}}</td>
			<td>{{$purchase->paid_amount}}</td>
			<td>{{$purchase->remark}}</td>
			<td>{{$purchase->status_id}}</td>
			<td>{{$purchase->discount}}</td>
			<td>{{$purchase->vat}}</td>

			<td>
			<form action = "{{route('purchases.destroy',$purchase->id)}}" method = "post">
				<a class= 'btn btn-primary' href = "{{route('purchases.show',$purchase->id)}}">View</a>
				<a class= 'btn btn-success' href = "{{route('purchases.edit',$purchase->id)}}"> Edit </a>
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
