@extends('layout.site.app')
@section('content')

<!-- Breadcrumb Start -->
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h1 class="page-title">Shop</h1>
                    <ul class="breadcrumb-page-list">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Shop</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb End -->

<!-- Page Section Content Start -->
<section class="page-secton-wrapper section-space-pb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 order-1 order-lg-1">
                <!--shop toolbar start-->
                <div class="shop-toolbar-wrapper me-lg-4 mb-3">
                    <div class="shop-toolbar-btn d-flex align-items-center">
                        <button data-role="grid-3" type="button" class="active btn-grid-3" title="3">
                            <i class="icon-rt-apps-sharp"></i>
                        </button>
                        <button data-role="grid-list" type="button" class=" btn-list" title="List">
                            <i class="icon-rt-list"></i>
                        </button>
                        <div class="page_amount ms-3">
                            <p>Showing 1–9 of 21 results</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">
                        <a href="#siderbar-widget-filter" class="button-show-filter filter-button-hide me-4 siderbar-widget-filte-button">
                            <i class="icon-rt-options-outline"></i> Filters
                        </a>
                        <form class="select_option" action="#">
                            <select name="orderby" id="short">
                                <option selected value="1">Default sorting</option>
                                <option value="2">Sort by popularity</option>
                                <option value="3">Sort by newness</option>
                                <option value="4">Sort by price: low to high</option>
                                <option value="5">Sort by price: high to low</option>
                                <option value="6">Product Name: Z</option>
                            </select>
                        </form>
                    </div>

                </div>
                <!--shop toolbar end-->

                <div class="shop-product-wrapper me-lg-4 border-top border-start row gx-0 archive-products">
                    @foreach($products as $product)
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                        <!-- Single Item Start -->
                        <div class="single-product-item">
                            <div class="single-product-item-image"  style="height: 300px;">
                                <a href="product-details.html" class="prodcut-images">
                                    <img class="primary-image" src="{{asset('img/' .$product->photo)}}"  height="200vh" width="300px" alt="{{$product->photo}}">
                                    <!-- <img class="secondary-image" src="assets/images/products/product-image-2-2.jpg" alt=""> -->
                                </a>
                                <ul class="single-product-item-action">
                                    <li class="single-product-item-action-list">
                                        <a href="wishlist.html" class="single-product-item-action-link"><i class="icon-rt-heart2"></i></a>
                                    </li>
                                    <li class="single-product-item-action-list">
                                        <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick-view-modal" class="single-product-item-action-link"><i class="icon-rt-eye2"></i></a>
                                    </li>
                                    <li class="single-product-item-action-list product-cart">
                                        <a  class="single-product-item-action-link"><i class="icon-rt-basket-outline laravel_cart" data-id="{{$product->id}}"></i></a>
                                    </li>
                                </ul>
                            </div>

                            <div class="single-product-item-content">
                                <div class="single-product-item-rating">
                                    <i class="icon-rt-star-solid select-star"></i>
                                    <i class="icon-rt-star-solid select-star"></i>
                                    <i class="icon-rt-star-solid select-star"></i>
                                    <i class="icon-rt-star-solid select-star"></i>
                                    <i class="icon-rt-star-solid"></i>
                                </div>
                                <h6 class="single-product-item-title"><a href="product-details.html">{{$product->name}}</a></h6>
                                <div class="single-product-item-price">
                                ৳  {{$product->regular_price}}
                                </div>
                                <div class="product-list-style">
                                    <p class="product-list-description">Almonds are one of the earth’s most ancient and nutritious food sources, packed with protein, fiber, magnesium and vitamin E</p>
                                    <div class="product-list-action-cart">
                                        <a href="product-details.html"><span class="text">Add to cart</span></a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Single Item End -->
                    </div>
                    @endforeach
                </div>

                <nav class="page-pagination">
                    <ul class='page-pagination-numbers'>
                        <li>
                            <a href="#" aria-current="page" class="page-numbers current">1</a>
                        </li>
                        <li>
                            <a class="page-numbers" href="#">2</a>
                        </li>
                        <li>
                            <a class="next page-numbers" href="#"><i class="icon-rt-arrow-right-solid"></i></a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</section>

@endsection