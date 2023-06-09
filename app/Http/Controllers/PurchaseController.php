<?php
/*
* ProBot Version: 3.0
* Laravel Version: 10x
* Description: This source file "app/Http/_PurchaseController.php" was generated by ProBot AI.
* Date: 5/4/2023 9:16:10 PM
* Contact: towhid1@outlook.com
*/
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Status;
use App\Models\Warehouse;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use mysqli;

class PurchaseController extends Controller{
	public function index(){
		$purchases = Purchase::paginate(10);
		$warehouses = Warehouse::paginate(10);
		$suppliers = Supplier::paginate(10);
		$products = Product::all();
		return view("pages.erp.purchase.index",["purchases"=>$purchases],["warehouses"=>$warehouses],["suppliers"=>$suppliers],["products"=>$products]);
	}
	public function create(){
		 	$last_purchase=Purchase::select("max(id)");
	
		return view("pages.erp.purchase.create",["suppliers"=>Supplier::all(),
		"status"=>Status::all(),
		"products"=>Product::all(),
		"warehouses"=>Warehouse::all(),
		"last_purchase"=>$last_purchase
	]);
	}
	public function store(Request $request){
		//Purchase::create($request->all());
		$purchase = new Purchase;
		$purchase->supplier_id=$request->supplier_id;
		$purchase->purchase_date=$request->purchase_date;
		$purchase->delivery_date=$request->delivery_date;
		$purchase->shipping_address=$request->shipping_address;
		$purchase->purchase_total=$request->purchase_total;
		$purchase->paid_amount=$request->paid_amount;
		$purchase->remark=$request->remark;
		$purchase->status_id=$request->status_id;
		$purchase->discount=$request->discount;
		$purchase->vat=$request->vat;

		$purchase->save();

		return back()->with('success', 'Created Successfully.');
	}
	public function show($id){
		$purchase = Purchase::find($id);
		return view("pages.erp.purchase.show",["purchase"=>$purchase]);
	}
	public function edit(Purchase $purchase){
		return view("pages.erp.purchase.edit",["purchase"=>$purchase,"suppliers"=>Supplier::all(),"status"=>Status::all()]);
	}
	public function update(Request $request,Purchase $purchase){
		//Purchase::update($request->all());
		$purchase = Purchase::find($purchase->id);
		$purchase->supplier_id=$request->supplier_id;
		$purchase->purchase_date=$request->purchase_date;
		$purchase->delivery_date=$request->delivery_date;
		$purchase->shipping_address=$request->shipping_address;
		$purchase->purchase_total=$request->purchase_total;
		$purchase->paid_amount=$request->paid_amount;
		$purchase->remark=$request->remark;
		$purchase->status_id=$request->status_id;
		$purchase->discount=$request->discount;
		$purchase->vat=$request->vat;

		$purchase->save();

		return redirect()->route("purchases.index")->with('success','Updated Successfully.');
	}
	public function destroy(Purchase $purchase){
		$purchase->delete();
		return redirect()->route("purchases.index")->with('success', 'Deleted Successfully.');
	}

}
?>
