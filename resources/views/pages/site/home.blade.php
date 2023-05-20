@extends('layout.site.app')

@section('content')


    <!-- Slider Main Start -->
    @include('layout.site.home.slider_row')
    <!-- Slider Main End -->

    <!-- Banner Section Start -->
    @include('layout.site.home.banner')
    <!-- Banner Section End -->

    <!-- Product Item Section Start -->
    @foreach($sections as $section)
    @if($section->inactive==0)

    <section class="product-item-section pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">
                    <div class="section-title-wrap">
                        <h2 class="section-title">
                            {{$section->name}}
                        </h2>
                        <p>Add bestselling products to weekly line up</p>
                    </div>
                </div>
            </div>
            <div class="product-slider-active product-border-box">
                @foreach($products as $product)
                @if($product->site_section_id==$section->id)

                <?php
                ?>
                <div class="single-product-item"  id='table'>
                    <div class="single-product-item-image">
                        <a href="product-details.html" class="prodcut-images">
                            <img class="primary-image" src=" {{asset('img/' .$product->photo)}}" height="200vh" width="300px" alt="{{$product->photo}}">
                            <!-- <img class="secondary-image"src="{{asset('site/assets/images/products/product-image-1-2.jpg')}}" alt=""> -->
                        </a>
                        <ul class="single-product-item-action">
                            <li class="single-product-item-action-list">
                                <a href="#" class="single-product-item-action-link"><i class="icon-rt-heart2"></i></a>
                            </li>
                            <li class="single-product-item-action-list">
                                <a href="#" data-id="{{$product->id}}" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick-view-modal" class="single-product-item-action-link  quick_view"><i class="icon-rt-eye2"></i></a>
                            </li>
                            <li class="single-product-item-action-list product-cart">

                                <a class=" single-product-item-action-link "> <i class="icon-rt-basket-outline laravel_cart" data-id="{{$product->id}}"> </i> </a>
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
                            {{$product->regular_price}} BDT
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>

        </div>
    </section>
    @endif
    @endforeach

    <!-- Product Item Section End -->

    <!-- Deals Product Item Section Start -->

    <!-- Product Item Section Start -->

    <!-- Banner Section Start -->

    <!-- Banner Section End -->

    <!-- Product Item Section Start -->

    <!-- Product Item Section End -->

    <!-- Banner Section Start -->

    <!-- Banner Section End -->

    <!-- Popular Categories Start -->


    <!-- Popular Categories End -->

    <!-- Newsletter Start -->
    @include('layout.site.home.newsletter');
    <!-- Newsletter End -->


@endsection