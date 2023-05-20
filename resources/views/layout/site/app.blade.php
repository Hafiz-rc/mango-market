@include('layout.site.home.header_library')



@include('layout.site.common.site_header')
<div clasa="container">
    @yield('content')
</div>




@include('layout.site.common.site_footer')

<!--  offcanvas Minicart Start -->
<div class="offcanvas-minicart_wrapper" id="miniCart">
    <div class="minicart-inner">
        <div class="close-btn-box">
            <a href="#" class="close-button clear-cart"><i class="icon-rt-close-outline  "></i></a>
        </div>
        <div class="minicart-content">
            <h6 class="mini-cart-title">YOUR CART</h6>
            <ul class="minicart-list" id="minicart-product-list">


            </ul>
        </div>
        <div class="minicart-item_total">
            <span class="font-weight--reguler">Subtotal:</span>
            <span class="ammount font-weight--reguler" id="cart-total">00 BDT</span>
        </div>
        <div class="minicart-btn_area">

            <a href="{{ url('/cart') }}" class="btn btn--full btn--primary">View cart</a>
        </div>

        <div class="minicart-btn_area">
            <a href="{{ url('/checkout') }}" class="btn btn--full btn--primary">Checkout</a>
        </div>
    </div>
    <div class="global-overlay"></div>
</div>
<!--  offcanvas Minicart End -->
<!-- Quick View Modal Start -->
<div class="modal fade product-modal-wrapper" id="quick-view-modal">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-body">
              <button type="button" class="button-close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <div class="modal-inner-area">
                  <div class="row gx-3 product-details-inner">
                      <div class="col-lg-6 col-md-6 col-sm-6">
                           Product Details Left 
                          <div class="product-details-left">
                              <div class="product-details-images slider-lg-image-1">
                                  <div class="lg-image img-zoom">
                                      <a href="assets/images/products/large/lg-1.html" class="img-poppu"></a>
                                  </div>
                                  <div class="lg-image img-zoom">
                                      <a href="assets/images/products/large/lg-2.html" class="img-poppu"><img src="assets/images/products/details/lg-2.jpg" alt="product image"></a>
                                  </div>
                                  <div class="lg-image img-zoom">
                                      <a href="assets/images/products/large/lg-3.html" class="img-poppu"><img src="assets/images/products/details/lg-3.jpg" alt="product image"></a>
                                  </div>
                                  <div class="lg-image img-zoom">
                                      <a href="assets/images/products/large/lg-4.html" class="img-poppu"><img src="assets/images/products/details/lg-4.jpg" alt="product image"></a>
                                  </div>
                              </div>
                              <div class="product-details-thumbs slider-thumbs-1">
                                  <div class="sm-image"><img src="assets/images/products/details/sm-1.jpg" alt="product image thumb"></div>
                                  <div class="sm-image"><img src="assets/images/products/details/sm-2.jpg" alt="product image thumb"></div>
                                  <div class="sm-image"><img src="assets/images/products/details/sm-3.jpg" alt="product image thumb"></div>
                                  <div class="sm-image"><img src="assets/images/products/details/sm-4.jpg" alt="product image thumb"></div>
                              </div>
                          </div>
                          // Product Details Left 
                      </div>

                      <div class="col-lg-6 col-md-6 col-sm-6">
                          <div class="product-details-view-content">
                              <h3 class="title">Single product One</h3>
                              <div class="product-rating d-flex">
                                  <ul class="d-flex">
                                      <li><a href="#"><i class="icon-rt-star-solid select-star"></i></a></li>
                                      <li><a href="#"><i class="icon-rt-star-solid select-star"></i></a></li>
                                      <li><a href="#"><i class="icon-rt-star-solid select-star"></i></a></li>
                                      <li><a href="#"><i class="icon-rt-star-solid select-star"></i></a></li>
                                      <li><a href="#"><i class="icon-rt-star-solid"></i></a></li>
                                  </ul>
                                  <a href="#" class="reting-count">(<span class="count">1</span> customer review)</a>
                              </div>
                              <p class="product-details-view-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor.</p>
                              <div class="price-box">
                                  <span class="new-price">৳ </span>–
                                  <span class="old-price">৳ </span>
                              </div>
                              <div class="product-vareant">
                                  <div class="pa_size">
                                      <label class="pa_size_label">Size</label>
                                      <span class="packet-swatch-vareant active swatch-1-kg" data-value="1-kg">1Kg</span>
                                      <span class="packet-swatch-vareant swatch-2-kg" data-value="100Gm">100Gm</span>
                                      <span class="packet-swatch-vareant swatch-3-kg" data-value="200Gm">200Gm</span>
                                      <span class="packet-swatch-vareant swatch-4-kg" data-value="500Gm">500Gm</span>
                                  </div>
                                  <div class="packet-swatch-vareant-price"></div>
                                  <div class="stock in-stock">737 in stock</div>
                              </div>

                              <div class="single-add-to-cart">
                                  <form action="#" class="cart-quantity d-flex">
                                      <div class="quantity">
                                          <div class="cart-plus-minus">
                                              <input class="cart-plus-minus-box" value="1" type="text">
                                          </div>
                                      </div>
                                      <button class="add-to-cart btn btn--primary md:px-5" type="submit">Add To Cart</button>
                                  </form>
                              </div>
                              <div class="add-to-wishlist">
                                  <a href="wishlist.html" class="add_to_wishlist"><i class="icon-rt-heart2"></i> Add to Wishlist</a>
                              </div>
                              <div class="share-product-socail-area">
                                  <p>Share:</p>
                                  <ul class="single-product-share">
                                      <li><a href="#"><i class="icon-rt-4-facebook-f"></i></a></li>
                                      <li><a href="#"><i class="icon-rt-logo-pinterest"></i></a></li>
                                      <li><a href="#"><i class="icon-rt-logo-twitter"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Login & Register Modal Start -->
@include('pages.site.popup_login')
<!-- JS Vendor, Plugins & Activation Script Files -->
@include('layout.site.home.footer_library')
