@extends('layout.site.app')
@section('content')
   <!-- Breadcrumb Start -->
   <section class="breadcrumb-section-two">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h2 class="visually-hidden">Cart Page</h2>
                            <ul class="breadcrumb-page-list">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><span class="active">Wishlist</span></li>
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
                        <div class="wishlist-tiel">
                            <h2 class="mb-5 fw-bold">My Wishlist</h2>
                        </div>
                        <form action="#" class="cart-table">
                            <div class=" table-content table-responsive">
                                <table class="table border">
                                    <thead>
                                        <tr>
                                            <th class="plantmore-product-thumbnail">Images</th>
                                            <th class="cart-product-name">Product</th>
                                            <th class="plantmore-product-price">Unit Price</th>
                                            <th class="plantmore-product-stock-status">Stock Status</th>
                                            <th class="plantmore-product-add-cart">Add to cart</th>
                                            <th class="plantmore-product-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="plantmore-product-thumbnail"><a href="#"><img src="assets/images/products/cart/cart-1.jpg" alt=""></a></td>
                                            <td class="plantmore-product-name"><a href="#">Nullam maximus</a></td>
                                            <td class="plantmore-product-price"><span class="amount">$23.39</span></td>
                                            <td class="plantmore-product-stock-status"><span class="in-stock">in stock</span></td>
                                            <td class="plantmore-product-add-cart"><a href="#" class="btn btn--primary btn--small">Add to cart</a></td>
                                            <td class="plantmore-product-remove"><a href="#"><i class="icon-rt-close-outline"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="plantmore-product-thumbnail"><a href="#"><img src="assets/images/products/cart/cart-2.jpg" alt=""></a></td>
                                            <td class="plantmore-product-name"><a href="#">Natus erro</a></td>
                                            <td class="plantmore-product-price"><span class="amount">$30.50</span></td>
                                            <td class="plantmore-product-stock-status"><span class="in-stock">in stock</span></td>
                                            <td class="plantmore-product-add-cart"><a href="#" class="btn btn--primary btn--small">Add to cart</a></td>
                                            <td class="plantmore-product-remove"><a href="#"><i class="icon-rt-close-outline"></i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="plantmore-product-thumbnail"><a href="#"><img src="assets/images/products/cart/cart-3.jpg" alt=""></a></td>
                                            <td class="plantmore-product-name"><a href="#">Sit voluptatem</a></td>
                                            <td class="plantmore-product-price"><span class="amount">$40.19</span></td>
                                            <td class="plantmore-product-stock-status"><span class="out-stock">out stock</span></td>
                                            <td class="plantmore-product-add-cart"><a href="#" class="btn btn--primary btn--small">Add to cart</a></td>
                                            <td class="plantmore-product-remove"><a href="#"><i class="icon-rt-close-outline"></i></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Section Content End -->
@endsection