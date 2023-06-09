@extends('layout.site.app')

@section('content')

<main>
        <!-- Breadcrumb Start -->
        <section class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h1 class="page-title">Contact Us</h1>
                            <ul class="breadcrumb-page-list">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">Contact Us</li>
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
                    <div class="col-lg-4">
                        <div class="contact-us-area">
                            <h2 class="fw-bold mb-3">Let us know how we can help</h2>
                            <p class="text me-lg-4">Please contact us using the below options. For fastest reply, please include your name, organization, appropriate contact information and a brief summary of your inquiry.</p>
                            <ul class="mt-5">
                                <li class="contact-feature-item">
                                    <div class="contact-feature-icon">
                                        <i class="icon-rt-location-pin"></i>
                                    </div>
                                    <div class="contact-feature-content">
                                        <h5 class="contact-feature-title fw-bold mb-1">
                                            Office Location
                                        </h5>
                                        <p class="text">West RazaBazar 59/6 A, Dhaka-1205</p>
                                    </div>
                                </li>
                                <li class="contact-feature-item">
                                    <div class="contact-feature-icon feature-icon-2">
                                        <i class="icon-rt-phone-volume-solid"></i>
                                    </div>
                                    <div class="contact-feature-content">
                                        <h5 class="contact-feature-title fw-bold mb-1">
                                            Call us anytime
                                        </h5>
                                        <p class="text">For immediate help please call <br>
                                            01705109676</p>
                                    </div>
                                </li>
                                <li class="contact-feature-item">
                                    <div class="contact-feature-icon feature-icon-3">
                                        <i class="icon-rt-mail-outline"></i>
                                    </div>
                                    <div class="contact-feature-content">
                                        <h5 class="contact-feature-title fw-bold mb-1">
                                            Send Mail
                                        </h5>
                                        <p class="text">
                                            <a href="#">hislam530@gmail.com</a>
                                            <br>
                                            <a href="#">hafizulislam.rc@gmail.com</a>
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-us-form-wrap">
                            <form id="#contact-form" action="#" method="post">
                                <div class="single-input-box">
                                    <input type="text" placeholder="Name *" name="con_name" required>
                                </div>
                                <div class="single-input-box">
                                    <input type="email" placeholder="Email *" name="con_email" required>
                                </div>
                                <div class="single-input-box">
                                    <input type="text" placeholder="Phone" name="con_phone">
                                </div>
                                <div class="single-input-box">
                                    <textarea placeholder="Message *" name="con_message" required></textarea>
                                </div>
                                <div class="single-input-box">
                                    <button type="submit" class="btn btn--primary">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Section Content End -->

        <!-- Google map start -->
        <div class="ifram-map-wrapper">
            <iframe class="ifram-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3743278.227637299!2d-61.159056951307704!3d-2.371597134950372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91e8605342744385%3A0x3d3c6dc1394a7fc7!2sAmazon%20Rainforest!5e0!3m2!1sen!2sbd!4v1638433670177!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- Google map end -->




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

        <!-- Our Feature Section Start -->
        <!-- Our Feature Section End -->

    </main> 

@endsection