@extends('layout.site.app')

@section('content')
<!-- <section class="breadcrumb-section-two">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="visually-hidden">Cart Page</h2>
                            <ul class="breadcrumb-page-list">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><span class="active">Cart Page</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
</section> -->
<!-- Breadcrumb End -->
<section class="breadcrumb-section-two">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <ul class="breadcrumb-page-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><span class="active">Cart Page</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Page Section Content Start -->
<section class="page-secton-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wishlist-tiel">
                    <h2 class="mb-2 fw-bold">My Cart</h2>
                </div>
                <form action="#" class="cart-table">
                    <div class="table-content table-responsive">
                        <table class="table border ">
                            <thead>
                                <tr>
                                    <th class="plantmore-product-remove">Remove</th>
                                    <th class="plantmore-product-thumbnail">Images</th>
                                    <th class="cart-product-name">Product</th>
                                    <th class="plantmore-product-price">Unit Price</th>
                                    <th class="plantmore-product-quantity">Quantity</th>
                                    <th class="plantmore-product-subtotal">Total</th>
                                </tr>
                            </thead>
                            <tbody id="card">

                           
                               
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="coupon-all mt-4">

                                <div class="coupon2">
                                    <!-- <input class="submit btn btn--primary" name="update_cart" value="Update cart" type="submit"> -->
                                    <a href="{{url('/')}}" class="btn btn--primary continue-btn ms-2">Continue Shopping</a>
                                </div>

                                <!-- <div class="coupon mt-4">
                                    <h3 class="fw-bold mb-2">Coupon</h3>
                                    <p class="text">Enter your coupon code if you have one.</p>
                                    <input id="coupon_code" class="input-text-coupon_code" name="coupon_code" value="" placeholder="Coupon code" type="text">
                                    <input class="button btn btn--primary ms-2" name="apply_coupon" value="Apply coupon" type="submit">
                                </div> -->
                            </div>
                        </div>
                        <div class="col-md-4 ml-auto">
                            <div class="cart-page-total mt-4">
                                <h2 class="fw-bold mb-3">Cart totals</h2>
                                <ul>
                                    <li>Total <span  id="subtotal"> 00 BDT</span></li>
                                    <!-- <li>Total <span id="total">00 BDT</span></li> -->
                                </ul>
                                <div class="button-box mt-3 text-end">
                                    <a href="{{url('/checkout')}}" class="proceed-checkout-btn btn btn--primary w-full">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@include("layout.site.cart.cart_footer_library")
