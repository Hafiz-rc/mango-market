@extends('layout.site.app')

@section('content')


<main>
    <!-- Breadcrumb Start -->
    <section class="breadcrumb-section-two">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="visually-hidden">Blog</h2>
                        <ul class="breadcrumb-page-list">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="blog.html">Blog</a></li>
                            <li class="breadcrumb-item"><span class="active">Aenean Nec Suscipit Nibh</span></li>
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
                <div class="col-lg-9 order-lg-1 order-1">
                    <div class="row me-lg-4">
                        <div class="col-12">
                            <!-- Blog Details Start -->
                            <div class="blog-post-details">

                                <h1 class="post-title">
                                    Spring Dress Try – On Haul
                                </h1>
                                <div class="post-meta-box d-flex pt-3 border-top gap-2">
                                    <div class="post-date meta-item">
                                        <i class="icon-rt-time-outline"></i><a href="#">June 13, 2021</a>
                                    </div>
                                    <div class="post-by-author meta-item">
                                        <i class="icon-rt-user"></i> <span class="me-1">By </span><a href="#">admin</a>
                                    </div>

                                    <div class="post-categories-parent meta-item">
                                        <a class="categorie-link" href="#">Company</a>
                                        <a class="categorie-link" href="#">Image</a>
                                        <a class="categorie-link" href="#">Travel</a>
                                    </div>

                                </div>
                                <div class="blog-post-image position-relative">
                                    <img src="{{asset('site/assets/images/blog/post-1-768x487.webp')}}" alt="">
                                </div>

                                <div class="blog-content">
                                    <div class="blog-content-inner-box">
                                        <p class="text">This is one of my favorite dress designers (has been for years!). Every detail in this dress (30% OFF RIGHT NOW TOO) is incredible from the gorgeous eyelet lace to the floral pattern to the scalloped hem. I love the length of this one too – especially with the hem detail. Feels so feminine! This would make the prettiest wedding guest dress if you have any upcoming events – love!</p>
                                        <div class="blog-content-inner-image">
                                            <div class="row">
                                                <!-- <div class="col-md-6">
                                                    <a href="{{asset('site/assets/images/blog/single_post_1.jpg')}}" class="img-popup">
                                                        <img src="assets/images/blog/single_post_1.jpg" alt="">
                                                    </a>
                                                </div> -->
                                                <div class="col-md-12">
                                                    <a href="assets/images/blog/single_post_2.jpg" class="img-popup">
                                                        <img src="{{asset('site/assets/images/blog/single_post_2.jpg')}}" alt="">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text">
                                            I last minute bought one of this designer’s dresses in CA last spring and could not stop wearing it. Their dresses are super flattering but I especially love this one! The smocked bodice with the full sleeves and skirt feel like a 2021 take on a princess dress. The dress keeps it’s shape really well too.
                                        </p>
                                        <h3 class="post-inner-title">Committed to Transparency</h3>
                                        <p class="text">
                                            Similar smocked bodice and full sleeves but also so different from the dress above! I love the lightweight poplin fabric and the tiered skirt. It feels super easy to wear and really versatile – perfect one-and-done outfit for spring/summer, the beach, traveling, etc. I ended up returning this one and keeping the one below but I loved both!
                                        </p>
                                        <h3 class="post-inner-title">Committed to Transparency</h3>
                                        <p class="text">
                                            This dress I’ve already worn a couple times. I love the combo of the multiple shades of blue with the micro floral print. Another options that’s really easy to wear for tons of occasions. It’s also on major sale right now – 50% off!
                                        </p>
                                    </div>
                                    <a href="assets/images/blog/single_post_3.jpg" class="img-popup blog-content-inner-image">
                                        <img src="assets/images/blog/single_post_3.jpg" alt="">
                                    </a>
                                    <div class="blog-content-inner-box">
                                        <p class="text">
                                            Every couple years I’ll pull the trigger on a designer tee and this year I couldn’t pass up on this Fendi tee. I’m obsessed with the color and the logo stitching on the front. I don’t own a ton of designer tees but the ones I do own get worn on repeat. They are all amazing quality and you can literally wear them forever if you take care of them, whereas with other tees you might get only a year or two of wear before it starts to fade or loose shape. All this to say… love this Fendi tee and will be wearing it for years! Haha. Perfect tee to wear with some cut-off shorts or dress up with some pretty high-waisted trousers and heels. Also can we talk about these pants?! The color is everything! Love the whole look paired with this mini-crossbody.
                                        </p>
                                    </div>
                                </div>

                                <div class="blog-post-share-wrap d-flex justify-content-between">
                                    <div class="blog-post-tag">
                                        <a href="#">Video</a>
                                        <a href="#">Audio</a>
                                    </div>
                                    <div class="blog-post-social-share">
                                        <a href="#" class="facebook"><i class="icon-rt-4-facebook-f"></i></a>
                                        <a href="#" class="pinterest"><i class="icon-rt-logo-pinterest"></i></a>
                                        <a href="#" class="twitter"><i class="icon-rt-logo-twitter"></i></a>
                                    </div>
                                </div>
                                <div class="previous-and-next-blog-post-wrap">
                                    <a href="#"><i class="icon-rt-arrow-left"></i>PREVIOUS</a>
                                    <a href="#">Next<i class="icon-rt-arrow-right"></i></a>
                                </div>

                                <!-- Latest News Item Section Start -->
                                <div class="latest-news-section section-space-pt">
                                    <div class="row">
                                        <div class="col-12 position-relative">
                                            <div class="section-title-wrap mb-30">
                                                <h2 class="section-related-title fw-bold">
                                                    Related posts
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="latest-blog-active">
                                        <!-- Latest Blog Card Start -->
                                        <div class="latest-blog-card">
                                            <div class="latest-blog-card-image">
                                                <a href="blog-details.html"><img src="assets/images/blog/post-2-768x487.webp" alt=""></a>
                                            </div>
                                            <div class="latest-blog-card-content text-start">
                                                <ul class="latest-blog-card-meta d-flex">
                                                    <li class="post-date">April 25, 2022</li>
                                                    <li class="post-comments"><a href="#">0 Comments</a></li>
                                                </ul>
                                                <h4 class="latest-blog-card-title"><a href="blog-details.html">Praesent imperdiet going through</a></h4>
                                            </div>
                                        </div>
                                        <!-- Latest Blog Card End -->
                                        <!-- Latest Blog Card Start -->
                                        <div class="latest-blog-card">
                                            <div class="latest-blog-card-image">
                                                <a href="blog-details.html"><img src="assets/images/blog/post-3-768x487.webp" alt=""></a>
                                            </div>
                                            <div class="latest-blog-card-content text-start">
                                                <ul class="latest-blog-card-meta d-flex">
                                                    <li class="post-date">July 25, 2022</li>
                                                    <li class="post-comments"><a href="#">0 Comments</a></li>
                                                </ul>
                                                <h4 class="latest-blog-card-title"><a href="blog-details.html">Maecenas ultricies treatise</a></h4>
                                            </div>
                                        </div>
                                        <!-- Latest Blog Card End -->
                                        <!-- Latest Blog Card Start -->
                                        <div class="latest-blog-card">
                                            <div class="latest-blog-card-image">
                                                <a href="blog-details.html"><img src="assets/images/blog/post-4-768x487.webp" alt=""></a>
                                            </div>
                                            <div class="latest-blog-card-content text-start">
                                                <ul class="latest-blog-card-meta d-flex">
                                                    <li class="post-date">April 15, 2022</li>
                                                    <li class="post-comments"><a href="#">0 Comments</a></li>
                                                </ul>
                                                <h4 class="latest-blog-card-title"><a href="blog-details.html">Suspendisse quis eros cursus</a></h4>
                                            </div>
                                        </div>
                                        <!-- Latest Blog Card End -->
                                        <!-- Latest Blog Card Start -->
                                        <div class="latest-blog-card">
                                            <div class="latest-blog-card-image">
                                                <a href="blog-details.html"><img src="assets/images/blog/post-5-768x487.webp" alt=""></a>
                                            </div>
                                            <div class="latest-blog-card-content text-start">
                                                <ul class="latest-blog-card-meta d-flex">
                                                    <li class="post-date">April 25, 2022</li>
                                                    <li class="post-comments"><a href="#">0 Comments</a></li>
                                                </ul>
                                                <h4 class="latest-blog-card-title"><a href="blog-details.html">Quisque egestas have suffered</a></h4>
                                            </div>
                                        </div>
                                        <!-- Latest Blog Card End -->
                                    </div>
                                </div>
                                <!-- Latest News Item Section End -->


                                <div class="blog-post-comment-area">
                                    <div class="review_address_inner pt-5 border-bottom pb-5">
                                        <!-- Start Single Review -->
                                        <div class="pro_review">
                                            <div class="review_thumb">
                                                <img alt="review images" src="assets/images/others/reviewer.jpg">
                                            </div>
                                            <div class="review_details">
                                                <div class="comment-list">
                                                    <div class="review_info mb-10">
                                                        <h5>
                                                            <span class="user-name fw-bold">mix83</span> <small>Say </small>
                                                            <br>
                                                            <span class="comment-date"> April 28, 2018 at 3:09 am</span>
                                                        </h5>
                                                    </div>
                                                    <p class="reviewer-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

                                                    <a href="#" class="comment-reply">Reply</a>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- End Single Review -->
                                        <!-- Start Single Review -->
                                        <div class="pro_review">
                                            <div class="review_thumb">
                                                <img alt="review images" src="assets/images/others/reviewer.jpg">
                                            </div>
                                            <div class="review_details">
                                                <div class="review_info mb-10">
                                                    <h5> <span class="user-name">453swq </span> - <span class="comment-date"> November 12, 2022</span></h5>

                                                </div>
                                                <p class="reviewer-text">Have bought several times. Great tasting keto Granola. Too expensive to use as a breakfast cereal but Great to add as a topping .</p>

                                                <a href="#" class="comment-reply">Reply</a>
                                            </div>
                                        </div>
                                        <!-- End Single Review -->
                                    </div>
                                    <!-- Start RAting Area -->
                                    <div class="rating_wrap pt-5">
                                        <h3 class="rating-title-1 fw-bold">Leave a Reply</h3>
                                        <p>our email address will not be published. Required fields are marked *</p>
                                    </div>
                                    <!-- End RAting Area -->
                                    <div class="comments-area comments-reply-area">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <form action="#" class="comment-form-area">
                                                    <div class="comment-form-comment mt-3">
                                                        <label>Comment</label>
                                                        <textarea class="comment-notes" required="required"></textarea>
                                                    </div>
                                                    <div class="row comment-input">
                                                        <div class="col-md-4 comment-form-author mt-3">
                                                            <label>Name <span class="required">*</span></label>
                                                            <input type="text" required="required" name="Name">
                                                        </div>
                                                        <div class="col-md-4 comment-form-email mt-3">
                                                            <label>Email <span class="required">*</span></label>
                                                            <input type="email" required="required" name="email">
                                                        </div>
                                                        <div class="col-md-4 comment-form-email mt-3">
                                                            <label>Website</label>
                                                            <input type="text" name="website">
                                                        </div>
                                                    </div>

                                                    <div class="comment-form-submit mt-3">
                                                        <input type="submit" value="Post Comment" class="comment-submit">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Blog Details End -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 order-lg-1 order-2">
                    <div class="blog-post-widget-wrapper">

                        <div class="blog-post-widget mt-lg-0">
                            <h5 class="widget-title">
                                Search
                            </h5>
                            <div class="search-inside-wrap">
                                <input type="text">
                                <button type="submit"><i class="icon-rt-magnifier"></i></button>
                            </div>
                        </div>

                        <div class="blog-post-widget">
                            <h5 class="widget-title">
                                Latest Posts
                            </h5>
                            <ul class="latest-posts-widget-wrap">
                                <li class="latest-post-widget-item">
                                    <a href="blog-details.html" class="latest-post-widget-thumb">
                                        <img src="assets/images/blog/post-2-150x150.webp" alt="">
                                    </a>
                                    <div class="latest-post-content">
                                        <a href="#" class="title">
                                            Praesent imperdiet going through
                                        </a>
                                        <a href="#" class="date">
                                            September 9, 2022
                                        </a>
                                    </div>
                                </li>
                                <li class="latest-post-widget-item">
                                    <a href="blog-details.html" class="latest-post-widget-thumb">
                                        <img src="assets/images/blog/post-3-150x150.webp" alt="">
                                    </a>
                                    <div class="latest-post-content">
                                        <a href="#" class="title">
                                            Maecenas ultricies treatise
                                        </a>
                                        <a href="#" class="date">
                                            july 12, 2022
                                        </a>
                                    </div>
                                </li>
                                <li class="latest-post-widget-item">
                                    <a href="blog-details.html" class="latest-post-widget-thumb">
                                        <img src="assets/images/blog/post-1-150x150.webp" alt="">
                                    </a>
                                    <div class="latest-post-content">
                                        <a href="#" class="title">
                                            Spring Dress Try – On Haul
                                        </a>
                                        <a href="#" class="date">
                                            June 19, 2022
                                        </a>
                                    </div>
                                </li>
                                <li class="latest-post-widget-item">
                                    <a href="blog-details.html" class="latest-post-widget-thumb">
                                        <img src="assets/images/blog/post-4-150x150.webp" alt="">
                                    </a>
                                    <div class="latest-post-content">
                                        <a href="#" class="title">
                                            Suspendisse quis eros cursus
                                        </a>
                                        <a href="#" class="date">
                                            April 15, 2022
                                        </a>
                                    </div>
                                </li>
                                <li class="latest-post-widget-item">
                                    <a href="blog-details.html" class="latest-post-widget-thumb">
                                        <img src="assets/images/blog/post-5-150x150.webp" alt="">
                                    </a>
                                    <div class="latest-post-content">
                                        <a href="#" class="title">
                                            Quisque egestas have suffered
                                        </a>
                                        <a href="#" class="date">
                                            February 10, 2022
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="blog-post-widget">
                            <h5 class="widget-title">
                                Gallery
                            </h5>
                            <div class="post-gallery-wrap">
                                <a href="assets/images/blog/post-2-768x487.webp" class="img-popup">
                                    <img src="assets/images/blog/post-2-150x150.webp" alt="">
                                </a>
                                <a href="assets/images/blog/post-3-768x487.webp" class="img-popup">
                                    <img src="assets/images/blog/post-3-150x150.webp" alt="">
                                </a>
                                <a href="assets/images/blog/post-1-768x487.webp" class="img-popup">
                                    <img src="assets/images/blog/post-1-150x150.webp" alt="">
                                </a>
                                <a href="assets/images/blog/post-4-768x487.webp" class="img-popup">
                                    <img src="assets/images/blog/post-4-150x150.webp" alt="">
                                </a>
                                <a href="assets/images/blog/post-5-768x487.webp" class="img-popup">
                                    <img src="assets/images/blog/post-5-150x150.webp" alt="">
                                </a>
                                <a href="assets/images/blog/post-10-768x487.webp" class="img-popup">
                                    <img src="assets/images/blog/post-6-150x150.webp" alt="">
                                </a>
                                </d>
                            </div>

                            <div class="blog-post-widget">
                                <h5 class="widget-title">
                                    Categories
                                </h5>
                                <ul class="post-categories-list-wrap">
                                    <li><a href="#">Audio</a></li>
                                    <li><a href="#">Company</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Image</a></li>
                                    <li><a href="#">Other</a></li>
                                    <li><a href="#">Travel</a></li>
                                    <li><a href="#">Uncategorized</a></li>
                                    <li><a href="#">Video</a></li>
                                    <li><a href="#">Wordpress</a></li>
                                </ul>
                            </div>
                            <div class="blog-post-widget">
                                <a href="#" class="banner_sidebar-image"><img src="assets/images/others/banner_sidebar.webp" alt=""></a>
                            </div>

                        </div>
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
    <!-- Newsletter End -->

</main>

@endsection