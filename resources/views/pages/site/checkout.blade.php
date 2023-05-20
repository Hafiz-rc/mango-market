@extends('layout.site.app')

@section('content')
<section class="breadcrumb-section-two">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="visually-hidden">Checkout</h2>
                    <ul class="breadcrumb-page-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><span class="active">Checkout</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="page-secton-wrapper section-space-ptb">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="coupon-area">
                    <!-- coupon-accordion start -->
                    <div class="coupon-accordion">
                        <h3>Returning customer? <span class="coupon" id="showlogin">Click here to login</span></h3>
                        <div class="coupon-content" id="checkout-login">
                            <div class="coupon-info">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                                <form action="#">
                                    <p class="coupon-input form-row-first">
                                        <label>Username or email <span class="required">*</span></label>
                                        <input type="text" name="email">
                                    </p>
                                    <p class="coupon-input form-row-last">
                                        <label>Password <span class="required">*</span></label>
                                        <input type="password" name="password">
                                    </p>
                                    <div class="clear"></div>
                                    <p>
                                        <button type="submit" class="button-login btn btn--primary btn--small" name="login" value="Login">Login</button>
                                        <label class="remember"><input type="checkbox" value="1"><span>Remember</span></label>
                                    </p>
                                    <p class="lost-password">
                                        <a href="#">Lost your password?</a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- coupon-accordion end -->
                    <!-- coupon-accordion start -->
                    <!-- <div class="coupon-accordion">
                                <h3>Have a coupon? <span class="coupon" id="showcoupon">Click here to enter your code</span></h3>
                                <div class="coupon-content" id="checkout-coupon">
                                    <div class="coupon-info">
                                        <form action="#">
                                            <p class="checkout-coupon">
                                                <input type="text" placeholder="Coupon code">
                                                <button type="submit" class="btn btn--primary btn--small" name="apply_coupon" value="Apply coupon">Apply coupon</button>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div> -->
                    <!-- coupon-accordion end -->
                </div>
            </div>
        </div>
        <!-- checkout-details-wrapper start -->
        <div class="checkout-details-wrapper">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <!-- billing-details-wrap start -->
                    <div class="billing-details-wrap">
                        <form action="#">
                            <h3 class="shoping-checkboxt-title">Billing Details</h3>
                            <div class="row">
                                <div class="col-lg-12">
                                    <p class="single-form-row">
                                        <label> Name <span class="required">*</span></label>
                                      
                                        <input type="text" id="txtName"  name="First name"  value=" <?php echo null !==session('sess_customer_name') ? session('sess_customer_name') : '' ?>">
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <p class="single-form-row">
                                        <label>Phone</label>
                                        <input id="txtDefaultMobile"  type="text" name="address"  value="<?php echo null !==session('sess_customer_mobile') ? session('sess_customer_mobile') : '' ?>">
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <p class="single-form-row">
                                        <label>Email address <span class="required">*</span></label>
                                        <input type="text" id="txtDefaultEmail" name="Email address " value="<?php echo null !==session('sess_customer_email') ? session('sess_customer_email') : '' ?>">
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <div class="single-form-row">
                                        <label>District <span class="required">*</span></label>
                                        <div class="nice-select wide">
                                            <select  id="countryDefault" >
                                               @foreach($countries as $country)
                                                    @if(session("c_session_id"))
                                                <option value="{{$country->id}} "  selected>{{$country->name}}</option>
                                                    @else
                                                    <option value="{{$country->id}} ">{{$country->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <p class="single-form-row">
                                        <label>Thana / City <span class="required">*</span></label>
                                        <input type="text" id="txtDefaultCity"  name="address" value="<?php echo null !==session('sess_customer_city') ? session('sess_customer_city') : '' ?>">

                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <p class="single-form-row">
                                        <label>Street address <span class="required">*</span></label>
                                        <input type="text"  id="txtDefaultStreetAddress"  value="<?php echo null !==session('sess_customer_street_address')? session('sess_customer_street_address') : '' ?>" placeholder="House number and street name" name="address">
                                    </p>
                                </div>
                                <div class="col-lg-12">
                                    <p class="single-form-row">
                                        <input type="text" id="txtDefaultApartment" value="<?php echo null !==session('sess_customer_apartment') ? session('sess_customer_apartment') : '' ?>"  placeholder="Apartment, suite, unit etc. (optional)" name="address">
                                    </p>
                                </div>
                               
                                <div class="col-lg-12">
                                    <p class="single-form-row">
                                        <label>Postcode / ZIP <span class="required">*</span></label>
                                        <input  id="txtDefaultPostcode" value="<?php echo null !==session('sess_customer_postcode')  ? session('sess_customer_postcode') : '' ?>" type="text" name="address">
                                    </p>
                                </div>
                                
                                <!-- <div class="col-lg-12">
                                    <div class="checkout-box-wrap">
                                        <label><input type="checkbox" id="chekout-box"> Create an account?</label>
                                        <div class="account-create single-form-row">
                                            <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                            <label class="creat-pass">Create account password <span>*</span></label>
                                            <input type="password" class="input-text">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="checkout-box-wrap">
                                        <label id="chekout-box-2"><input type="checkbox"> Ship to a different address?</label>
                                        <div class="ship-box-info">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <p class="single-form-row">
                                                        <label>First name <span class="required">*</span></label>
                                                        <input type="text" name="First name">
                                                    </p>
                                                </div>
                                                <div class="col-lg-6">
                                                    <p class="single-form-row">
                                                        <label>Username or email <span class="required">*</span></label>
                                                        <input type="text" name="Last name ">
                                                    </p>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="single-form-row">
                                                        <label>Company name</label>
                                                        <input type="text" name="email">
                                                    </p>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="single-form-row">
                                                        <label>Country <span class="required">*</span></label>
                                                        <div class="nice-select wide">
                                                            <select>
                                                                <option>Select Country...</option>
                                                                <option>Albania</option>
                                                                <option>Angola</option>
                                                                <option>Argentina</option>
                                                                <option>Austria</option>
                                                                <option>Azerbaijan</option>
                                                                <option>Bangladesh</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="single-form-row">
                                                        <label>Street address <span class="required">*</span></label>
                                                        <input type="text" placeholder="House number and street name" name="address">
                                                    </p>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="single-form-row">
                                                        <input type="text" placeholder="Apartment, suite, unit etc. (optional)" name="address">
                                                    </p>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="single-form-row">
                                                        <label>Town / City <span class="required">*</span></label>
                                                        <input type="text" name="address">
                                                    </p>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="single-form-row">
                                                        <label>State / County</label>
                                                        <input type="text" name="address">
                                                    </p>
                                                </div>
                                                <div class="col-lg-12">
                                                    <p class="single-form-row">
                                                        <label>Postcode / ZIP <span class="required">*</span></label>
                                                        <input type="text" name="address">
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <p class="single-form-row m-0">
                                        <label>Order notes</label>
                                        <textarea placeholder="Notes about your order, e.g. special notes for delivery." class="checkout-mess" rows="2" cols="5"></textarea>
                                    </p>
                                </div> -->
                            </div>
                        </form>
                    </div>
                    <!-- billing-details-wrap end -->
                </div>
                <div class="col-lg-6 col-md-6">
                    <!-- your-order-wrapper start -->
                    <div class="your-order-wrapper ms-lg-5">
                        <h3 class="shoping-checkboxt-title">Your Order</h3>
                        <!-- your-order-wrap start-->
                        <div class="your-order-wrap">
                            <!-- your-order-table start -->
                            <div class="your-order-table table-responsive">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product-name">Product</th>
                                            <th class="product-total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                    </tbody>
                                    <tfoot>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="sub_total">00 </span> BDT</td>
                                        </tr>
                                        <tr class="cart-subtotal">
                                            <th>Shipping</th>
                                           
                                            <td><span class="shipping" >00</span> BDT</td>
                                        </tr>
                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="total"> 00</span> BDT </strong>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- your-order-table end -->

                            <!-- your-order-wrap end -->
                            <div class="payment-method">
                                <div class="payment-accordion">
                                    <div class="accordion-item">
                                        <span class="payment-accordion-item-button">
                                            <input type="radio" id="bank-transfer" name="paymentsSelector" checked><label for="bank-transfer">Direct Bank Transfer</label>
                                        </span>
                                        <p class="payments-text-body">
                                            Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                        </p>
                                    </div>
                                    <div class="accordion-item">
                                        <span class="payment-accordion-item-button">
                                            <input type="radio" id="check-payments" name="paymentsSelector"><label for="check-payments">Check payments</label>
                                        </span>
                                        <p class="payments-text-body">
                                            Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
                                        </p>
                                    </div>
                                    <div class="accordion-item">
                                        <span class="payment-accordion-item-button">
                                            <input type="radio" id="cash-on-delivery" name="paymentsSelector"><label for="cash-on-delivery">Cash on delivery</label>
                                        </span>
                                        <p class="payments-text-body">
                                            Pay with cash upon delivery.
                                        </p>
                                    </div>
                                    <div class="accordion-item">
                                        <span class="payment-accordion-item-button">
                                            <input type="radio" id="payPal" name="paymentsSelector"><label for="payPal">PayPal <img src="{{asset('site/assets/images/others/atm_mc_vs_dc_ae.jpg')}}" alt="" /></label>
                                        </span>
                                        <p class="payments-text-body">
                                            Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                                        </p>
                                    </div>


                                </div>
                                <p class="text mt-4">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                <div class="order-button-payment ">
                                    <input  id="btn-place-order" type="submit" value="Place order" />
                                </div>
                            </div>
                            <!-- your-order-wrapper start -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- checkout-details-wrapper end -->
    </div>
</section>
@endsection

<@include("layout.site.checkout.checkout_footer_library")
