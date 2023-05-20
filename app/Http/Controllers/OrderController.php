<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::join('customers', 'orders.customer_id','=','customers.id')
        ->select('orders.*','customers.name as c_name')->get();
               

        return view("pages.erp.order.index",["orders"=>$orders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers=DB::table("customers")->get();
        $products=DB::table("products")->get();

       // print_r($customers);
        return view("pages.erp.order.create",["customers"=>$customers,"products"=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
              dd($request->all()); 
          //print_r($products);
        //Order
         $order=new Order;
         
        // print_r($order);

           $order->customer_id=$request->cmbCustomer;
           $order->order_date=isset($data["order_date"])?$data["order_date"]:date("y-m-d");    
           $order->due_date=isset($data["delivery_date"])?$data["delivery_date"]:date("y-m-d");   

           $order->shipping_address=isset($request->txtShippingAddress)?$request->txtShippingAddress:"NA";
           $order->discount=isset($request->txtDiscount)?$request->txtDiscount:0;
           $order->vat=isset($request->txtVat)?$request->txtVat:"0";
           $order->paid_amount=0;
           $order->order_total=isset($request->txtTotal)?$request->txtTotal:"0";
           $order->status_id=1;         
           $order->remark=isset($request->txtTotal)?$request->txtTotal:"N/A";         
           
           $order->save();        
         

        //  //Order Details
        $products=$request->txtProducts; 
        
       // print_r($products);
       
        foreach($products as $product){         
           
            $order_detail=new OrderDetail;         

            $order_detail->order_id=$order->id;
            $order_detail->product_id=$product["item_id"];
            $order_detail->qty=$product["qty"];
            $order_detail->price=$product["price"];            
            $order_detail->discount=isset($product["discount"])?$product["discount"]:0;
            $order_detail->vat=0;

            $order_detail->save();
      }


         //Stock




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $order=Order::join('customers', 'orders.customer_id','=','customers.id')
        ->select('orders.*','customers.name as c_name')
        ->find($id);

        $orderDetails=OrderDetail::join('products','order_details.product_id','=','products.id')
        ->select("order_details.*",'products.name as p_name')
        ->where( 'order_id',$id)->get();
       
       
        
        return view("pages.erp.order.show",["order"=> $order , 'orderdetails'=> $orderDetails]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $order=Order::find($id);
        $customers=Customer::all();
        $products=Product::all();
        $orderDetails=OrderDetail::join('products','order_details.product_id','=','products.id')
        ->select("order_details.*",'products.name as p_name')
        ->where( 'order_id',$id)->get();
        return view("pages.erp.order.edit",["order"=>$order, 'customers'=>$customers, 'orderDetails'=>$orderDetails, 'products'=>$products]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {  
        $order->delete();

        return redirect()->route("orders.index")->with('success', 'Deleted Successfully.');
        


        //
    }
}
