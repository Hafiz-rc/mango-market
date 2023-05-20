@extends('layout.site.app')

@section('content')

<main>
    <!-- Breadcrumb Start -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h1 class="page-title">Blog</h1>
                        <ul class="breadcrumb-page-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item">Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- Page Section Content Start -->
    <section class="page-secton-wrapper section-space-pb pt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Latest Blog Card Start -->
                    <div class="blog-post-card post-style-2 mt-5">
                        <div class="latest-blog-card-image position-relative">
                            <a href="{{url('blog_details')}}" class="d-block">
                                <img src="{{asset('site/assets/images/blog/post-1-768x487.webp')}}" alt="">
                            </a>
                            <a href="#" class="post-date-box"><span class="date">13</span> Jun</a>
                        </div>
                        <div class="latest-blog-card-content text-start">
                            <div class="latest-blog-card-content-inner">
                                <div class="post-categories-parent">
                                    <a href="#">Company</a>
                                    <a href="#">Image</a>
                                    <a href="#">Travel</a>
                                </div>
                                <h3 class="latest-blog-card-title">
                                    <a href="blog-details.html">Spring Dress Try – On Haul</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Latest Blog Card End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Latest Blog Card Start -->
                    <div class="blog-post-card post-style-2 mt-5">
                        <div class="latest-blog-card-image position-relative">
                            <a href="blog-details.html" class="d-block">
                                <img src="{{asset('site/assets/images/blog/post-2-768x487.webp')}}" alt="">
                            </a>
                            <a href="#" class="post-date-box"><span class="date">10</span> Jun</a>
                        </div>
                        <div class="latest-blog-card-content text-start">
                            <div class="latest-blog-card-content-inner">
                                <div class="post-categories-parent">
                                    <a href="#">Company</a>
                                    <a href="#">Image</a>
                                    <a href="#">Travel</a>
                                </div>
                                <h3 class="latest-blog-card-title">
                                    <a href="blog-details.html">Praesent imperdiet going through</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Latest Blog Card End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Latest Blog Card Start -->
                    <div class="blog-post-card post-style-2 mt-5">
                        <div class="latest-blog-card-image position-relative">
                            <a href="blog-details.html" class="d-block">
                                <img src="{{asset('site/assets/images/blog/post-3-768x487.webp')}}" alt="">
                            </a>
                            <a href="#" class="post-date-box"><span class="date">15</span> Jun</a>
                        </div>
                        <div class="latest-blog-card-content text-start">
                            <div class="latest-blog-card-content-inner">
                                <div class="post-categories-parent">
                                    <a href="#">Company</a>
                                    <a href="#">Image</a>
                                    <a href="#">Travel</a>
                                </div>
                                <h3 class="latest-blog-card-title">
                                    <a href="blog-details.html">Maecenas ultricies treatise</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Latest Blog Card End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Latest Blog Card Start -->
                    <div class="blog-post-card post-style-2 mt-5">
                        <div class="latest-blog-card-image position-relative">
                            <a href="blog-details.html" class="d-block">
                                <img src="{{asset('site/assets/images/blog/post-4-768x487.webp')}}" alt="">
                            </a>
                            <a href="#" class="post-date-box"><span class="date">17</span> Jun</a>
                        </div>
                        <div class="latest-blog-card-content text-start">
                            <div class="latest-blog-card-content-inner">
                                <div class="post-categories-parent">
                                    <a href="#"> Video</a>
                                    <a href="#">Wordpress</a>
                                </div>
                                <h3 class="latest-blog-card-title">
                                    <a href="
                                    ">Suspendisse quis eros cursus</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Latest Blog Card End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Latest Blog Card Start -->
                    <div class="blog-post-card post-style-2 mt-5">
                        <div class="latest-blog-card-image position-relative">
                            <a href="blog-details.html" class="d-block">
                                <img src="{{asset('site/assets/images/blog/post-5-768x487.webp')}}" alt="">
                            </a>
                            <a href="#" class="post-date-box"><span class="date">19</span> Jun</a>
                        </div>
                        <div class="latest-blog-card-content text-start">
                            <div class="latest-blog-card-content-inner">
                                <div class="post-categories-parent">
                                    <a href="#">Other</a>
                                    <a href="#">Wordpress</a>
                                </div>
                                <h3 class="latest-blog-card-title">
                                    <a href="blog-details.html">Quisque egestas have suffered</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Latest Blog Card End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Latest Blog Card Start -->
                    <div class="blog-post-card post-style-2 mt-5">
                        <div class="latest-blog-card-image position-relative">
                            <a href="blog-details.html" class="d-block">
                                <img src="{{asset('site/assets/images/blog/post-6-768x487.webp')}}" alt="">
                            </a>
                            <a href="#" class="post-date-box"><span class="date">21</span> Jun</a>
                        </div>
                        <div class="latest-blog-card-content text-start">
                            <div class="latest-blog-card-content-inner">
                                <div class="post-categories-parent">
                                    <a href="#">Other</a>
                                    <a href="#">Video</a>
                                </div>
                                <h3 class="latest-blog-card-title">
                                    <a href="blog-details.html">Aenean nec suscipit nibh</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Latest Blog Card End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Latest Blog Card Start -->
                    <div class="blog-post-card post-style-2 mt-5">
                        <div class="latest-blog-card-image position-relative">
                            <a href="blog-details.html" class="d-block">
                                <img src="{{asset('site/assets/images/blog/post-7-768x487.webp')}}" alt="">
                            </a>
                            <a href="#" class="post-date-box"><span class="date">23</span> Jun</a>
                        </div>
                        <div class="latest-blog-card-content text-start">
                            <div class="latest-blog-card-content-inner">
                                <div class="post-categories-parent">
                                    <a href="#">Other</a>
                                    <a href="#">Video</a>
                                </div>
                                <h3 class="latest-blog-card-title">
                                    <a href="blog-details.html">Nunc vitae lacus eget lectus</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Latest Blog Card End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Latest Blog Card Start -->
                    <div class="blog-post-card post-style-2 mt-5">
                        <div class="latest-blog-card-image position-relative">
                            <a href="blog-details.html" class="d-block">
                                <img src="{{asset('site/assets/images/blog/post-8-768x487.webp')}}" alt="">
                            </a>
                            <a href="#" class="post-date-box"><span class="date">26</span> Jun</a>
                        </div>
                        <div class="latest-blog-card-content text-start">
                            <div class="latest-blog-card-content-inner">
                                <div class="post-categories-parent">
                                    <a href="#">Other</a>
                                    <a href="#">Video</a>
                                </div>
                                <h3 class="latest-blog-card-title">
                                    <a href="blog-details.html">Libero lorem treatise on the theory</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Latest Blog Card End -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Latest Blog Card Start -->
                    <div class="blog-post-card post-style-2 mt-5">
                        <div class="latest-blog-card-image position-relative">
                            <a href="blog-details.html" class="d-block">
                                <img src="{{asset('site/assets/images/blog/post-9-768x487.webp')}}" alt="">
                            </a>
                            <a href="#" class="post-date-box"><span class="date">28</span> Nov</a>
                        </div>
                        <div class="latest-blog-card-content text-start">
                            <div class="latest-blog-card-content-inner">
                                <div class="post-categories-parent">
                                    <a href="#">Other</a>
                                    <a href="#">Travel</a>
                                </div>
                                <h3 class="latest-blog-card-title">
                                    <a href="blog-details.html">Tortor posuere more obscure</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- Latest Blog Card End -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <nav class="page-pagination mt-5">
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
    <!-- Page Section Content End -->


    <!-- Newsletter Start -->
    <section class="newsletter-section bg-secondary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6 order-md-1 order-lg-1">
                    <div class="newsletter-title-wrap">
                        <div class="newsletter-icons">
                            <i class="iconrt- icon-rt-mail-open-outline"></i>
                        </div>
                        <div class="newsletter-content">
                            <h2>Sign up to Newsletter</h2>
                            <p>...and receive $20 coupon for first shopping</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  mt-4 mt-md-0 order-md-2 order-lg-3">
                    <div class="newsletter-whatsapp-wrap">
                        <div class="newsletter-whatsapp-inner">
                            <div class="whatsapp-icons">
                                <i class="iconrt- icon-rt-logo-whatsapp"></i>
                            </div>
                            <div class="whatsapp-content">
                                <p>Call Us 24/7</p>
                                <h2>+8 88 55 4168</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 mt-4 mt-lg-0 order-md-3 order-lg-2">
                    <form action="#" class="newsletter-form">
                        <input type="email" placeholder="Your Email Address..." required>
                        <button class="btn btn--primary submit-button fw-semibold" type="submit">Subscribe!</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>


@endsection