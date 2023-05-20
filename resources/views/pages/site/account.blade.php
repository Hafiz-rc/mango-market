@extends('layout.site.app')

@section('content')
<!-- Breadcrumb Start -->
<section class="breadcrumb-section-two">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2 class="visually-hidden">My Account</h2>
                    <ul class="breadcrumb-page-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><span class="active">My Account</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb End -->

<!-- Page Section Content Start -->
<section class="page-secton-wrapper section-space-ptb">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="account-dashboard">
                    <div class="dashboard-upper-info">
                        <div class="row align-items-center no-gutters">
                            <div style="text-align: center;" class="col-lg-12 col-md-12">
                                <div class="d-single-info">
                                    <p style="font-size: larger;" class="user-name">Hello <span><?php echo  strtoupper(session('sess_customer_name')) ?></span></p>

                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-2">
                            <!-- Nav tabs -->
                            <ul role="tablist" class="nav flex-column dashboard-list">
                                <li><a href="#dashboard" data-bs-toggle="tab" class="nav-link active">Dashboard</a></li>
                                <li> <a href="#orders" data-bs-toggle="tab" class="nav-link">Orders</a></li>

                                <li><a href="#address" data-bs-toggle="tab" class="nav-link">Addresses</a></li>
                                <li><a href="#account-details" data-bs-toggle="tab" class="nav-link">Account details</a></li>
                                <li><a href="{{route('c_logout')}}" class="nav-link">logout</a></li>
                            </ul>
                        </div>
                        <div class="col-md-12 col-lg-10">
                            <!-- Tab panes -->
                            <div class="tab-content dashboard-content">
                                <div class="tab-pane active" id="dashboard">
                                    <h3>Dashboard </h3>
                                    <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a href="#">edit your password and account details.</a></p>
                                </div>
                                <div class="tab-pane fade" id="orders">
                                    <h3>Orders</h3>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>Order</th>
                                                    <th>Date</th>
                                                    <th>Status</th>
                                                    <th>Total</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>May 10, 2022</td>
                                                    <td>Processing</td>
                                                    <td>$25.00 for 1 item </td>
                                                    <td><a href="shopping-cart.html" class="view btn btn--primary">view</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>May 10, 2022</td>
                                                    <td>Processing</td>
                                                    <td>$17.00 for 1 item </td>
                                                    <td><a href="shopping-cart.html" class="view btn btn--primary">view</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="address">
                                    <h4 class="billing-address">Billing address</h4>
                                    <!-- <a href="#" class="view btn btn--primary">edit</a> -->
                                    <p>Distict:<?php echo session('sess_customer_country_id') ?> </p>
                                    <p>City : <?php echo session('sess_customer_city') ?> </p>

                                    <p>Street Address : <?php echo session('sess_customer_street_address') ?> </p>
                                    <p>Apartment : <?php echo session('sess_customer_apartment') ?> </p>
                                    <p>Post Code : <?php echo session('sess_customer_postcode') ?> </p>
                                    <hr>

                                    <a href="#" class="view btn btn--primary header-action-item" data-bs-toggle="modal" data-bs-target="#addressModal">edit</a>

                                </div>
                            </div>



                            <div class="tab-pane fade" id="account-details">
                                <h3>Account details </h3>
                                <div class="login">
                                    <div class="login-form-container">
                                        <div class="account-login-form">
                                            <form action="#">
                                                <p>Already have an account? <a href="#">Log in instead!</a></p>
                                                <label>Social title</label>
                                                <div class="input-radio">
                                                    <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mr.</span>
                                                    <span class="custom-radio"><input type="radio" value="1" name="id_gender"> Mrs.</span>
                                                </div>
                                                <div class="account-input-box">
                                                    <label>First Name</label>
                                                    <input type="text" name="first-name">
                                                    <label>Last Name</label>
                                                    <input type="text" name="last-name">
                                                    <label>Email</label>
                                                    <input type="text" name="email-name">
                                                    <label>Password</label>
                                                    <input type="password" name="user-password">
                                                    <label>Birthdate</label>
                                                    <input type="text" placeholder="MM/DD/YYYY" value="" name="birthday">
                                                </div>
                                                <div class="example">
                                                    (E.g.: 05/31/1970)
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" value="1" name="optin">
                                                    <label>Receive offers from our partners</label>
                                                </div>
                                                <div class="custom-checkbox">
                                                    <input type="checkbox" value="1" name="newsletter">
                                                    <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label>
                                                </div>
                                                <div class="button-box">
                                                    <button class="btn default-btn btn btn--primary" type="submit">Save</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="header-login-register-wrapper modal fade" id="addressModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-logo">
                    <a href="#">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                </div>
                <div class="modal-box-wrapper">

                    <form action="" method="post">
                        @csrf
                        @method("PUT")
                        <div class="col-lg-12">
                            <div class="single-form-row">
                                <label>District <span class="required">*</span></label>
                                <div class="nice-select wide">
                                    <select id="countryDefault" name='country_id' class="country_id" >
                                        @foreach($countries as $country)
                                        @if(session("c_session_id"))
                                        <option value="{{$country->id}} " selected>{{$country->name}}</option>
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
                                <input type="text" id="txtDefaultCity" name=" city" value="<?php echo null !== session('sess_customer_city') ? session('sess_customer_city') : '' ?>">

                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="single-form-row">
                                <label>Street address <span class="required">*</span></label>
                                <input type="text" id="txtDefaultStreetAddress" value="<?php echo null !== session('sess_customer_street_address') ? session('sess_customer_street_address') : '' ?>" placeholder="House number and street name" name="street_address">
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <p class="single-form-row">
                                <input type="text" id="txtDefaultApartment" value="<?php echo null !== session('sess_customer_apartment') ? session('sess_customer_apartment') : '' ?>" placeholder="Apartment, suite, unit etc. (optional)" name="apartment">
                            </p>
                        </div>

                        <div class="col-lg-12">
                            <p class="single-form-row">
                                <label>Postcode / ZIP <span class="required">*</span></label>
                                <input id="txtDefaultPostcode" value="<?php echo null !== session('sess_customer_postcode')  ? session('sess_customer_postcode') : '' ?>" type="text" name="postcode">
                            </p>
                        </div>

                        <input type="hidden" class="id" value="<?php echo session('sess_customer_id') ?>">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- Page Section Content End -->

@endsection