<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "resources/views/purchase/_show.blade.php" was generated by ProBot AI.
* Date: 5/4/2023 9:17:54 PM
* Contact: towhid1@outlook.com
*/
?>
@extends('layout.erp.app')
@section('title','Show Purchase')
@section('style')


@endsection
@section('page')
<a class='btn btn-success' href="{{route('purchases.index')}}">Manage</a>
<table class='table table-striped text-nowrap'>
<tbody>
		<tr><th>Id</th><td>{{$purchase->id}}</td></tr>
		<tr><th>Supplier Id</th><td>{{$purchase->supplier_id}}</td></tr>
		<tr><th>Purchase Date</th><td>{{$purchase->purchase_date}}</td></tr>
		<tr><th>Delivery Date</th><td>{{$purchase->delivery_date}}</td></tr>
		<tr><th>Shipping Address</th><td>{{$purchase->shipping_address}}</td></tr>
		<tr><th>Purchase Total</th><td>{{$purchase->purchase_total}}</td></tr>
		<tr><th>Paid Amount</th><td>{{$purchase->paid_amount}}</td></tr>
		<tr><th>Remark</th><td>{{$purchase->remark}}</td></tr>
		<tr><th>Status Id</th><td>{{$purchase->status_id}}</td></tr>
		<tr><th>Discount</th><td>{{$purchase->discount}}</td></tr>
		<tr><th>Vat</th><td>{{$purchase->vat}}</td></tr>

</tbody>
</table>
@endsection
@section('script')


@endsection
