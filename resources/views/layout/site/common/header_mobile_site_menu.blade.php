<div class="mobile-header main-header m-header-1 d-block d-lg-none">
    <div class="container">
        <div class="row align-items-center">
            <div class="col mobile-header-start">
                <div class="d-flex gap-2">
                    <div class="menu-mobile">
                        <a href="#moible-menu" class="m-menu-btn mobile-menu-active">
                            <i class="icon-rt-bars-solid"></i>
                        </a>
                    </div>

                    <div class="m-menu-side" id="moible-menu">

                        <div class="mobile-menu-inner">
                            <a href="#" class="side-close-icon"><i class="icon-rt-close-outline"></i></a>
                            <ul class="mobile-lan-curr-nav align-items-center">
                            @if(!session("c_sess_id"))
                                    <li class="language"><a  href="{{url('login')}}">  Sign In /Sign Up </a> </i>   
                                    </li>
                                    @else
                                    <li class="language"> <?php echo strtoupper(session("sess_customer_name") ) ,"'S ACCOUNT "  ?><i class="icon-rt-arrow-down"></i>
                                        <ul class="dropdown-list">
                                            <li><a href="{{url('account')}}">MyAccount</a></li>
                                            <li><a href="{{route('c_logout')}}">Logout</a></li>
                                        </ul>
                                    </li>
                                    @endif

                                <li class="language">English <i class="icon-rt-arrow-down"></i>

                                    <ul class="dropdown-list">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">French</a></li>
                                    </ul>
                                </li>
                              
                            </ul>
                          
                            <div class="mobile-tab-wrap">
                                <div class="mobile-tab-menu">
                                    <ul class="nav" role="tablist">
                                        <li class="tab__item nav-item">
                                            <a class="active" data-bs-toggle="tab" href="#menu_tab" role="tab">Menu</a>
                                        </li>
                                        <li class="tab__item nav-item">
                                            <a data-bs-toggle="tab" href="#categories_tab" role="tab">Categories</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="menu_tab" role="tabpanel">
                                        <nav class="offcanvas-navigation">
                                        <ul>   
                                    @foreach($menus as $menu)   
                                    @if($menu->has_child==1)                                 
                                        <li style="padding-left: 50px ;" class="active"><a href="index.html">{{$menu->name}} <i class="icon-rt-arrow-down"></i></a>
                                            <ul class="sub-menu">
                                                <li><a href="index.html">Home Page 1</a></li>
                                                <li><a href="index-2.html">Home Page 2</a></li>
                                                <li><a href="index-3.html">Home Page 3</a></li>
                                                <li><a href="index-4.html">Home Page 4</a></li>
                                            </ul>
                                        </li>
                                        @else
                                        <li style="padding-left: 50px ;" class="active"><a  href="{{ url('/' . $menu->link) }}">{{$menu->name}}</i></a>      
                                        </li>
                                        <!-- style="font-size:large;" -->
                                            @endif
                                        @endforeach
                                    </ul>
                                        </nav>
                                    </div>
                                    <div class="tab-pane fade" id="categories_tab" role="tabpanel">
                                        <div class="categories_menu_toggle mobile_categories_menu_toggle">
                                        <ul>
                                            @foreach($categories as $category)
                                            @if($category->has_child==1)
                                            <li class="menu_item_children categorie_list"> <a href="#"><img src="assets/images/categories-icons/meat.svg" alt="">{{$category->name}}<i class="icon-rt-arrow-right"></i></a>
                                                <ul class="categories_mega_menu">
                                                    <li><a href="#">Fish</a></li>
                                                    <li><a href="#"> Shellfish</a></li>
                                                    <li><a href="#">Roe</a></li>
                                                </ul>
                                            </li>
                                            @else
                                            <li class="menu_item_children categorie_list"> <a href="#"><img src="assets/images/categories-icons/meat.svg" alt="">{{$category->name}}</i></a>
                                            </li>
                                            @endif
                                          @endforeach
                                        </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="header-block search-block-mobile search-sidebar">
                        <button class="mobile-search-popup"><i class="icon-rt-loupe"></i></button>
                    </div>
                    <div class="popup-search-wrapper">
                        <a href="#" class="search-close-button"><i class="icon-rt-close-outline"></i></a>
                        <div class="search-box">
                            <form action="#" class="search-form searchbox">
                                <div class="input-wrapper">
                                    <input type="text" class="ajax_search search-field mixy_ajax_search" placeholder="Search...">
                                    <button class="search-submit" type="submit">
                                        <i class="icon-rt-loupe"></i>
                                    </button>
                                </div>
                            </form>
                            <div class="search_content">
                                <div class="search-keywords-list">
                                    <p>Popular searches :</p>
                                    <ul class="header-search-popular">
                                        <li><a href="#">fruits</a></li>
                                        <li><a href="#">fresh</a></li>
                                        <li><a href="#">organic</a></li>
                                        <li><a href="#">tomato</a></li>
                                        <li><a href="#">meat</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mobile-header-mobile">
                <div class="logo text-center">
                    <a href="index.html"><img src="assets/images/logo.png" alt=""></a>
                </div>
            </div>
            <div class="col mobile-header-right">
                <div class="header-middle-right-area">
                    <div class="my-account">
                        <a href="#" class="header-action-item" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-rt-user"></i></a>
                    </div>
                    <div class="cart">
                        <a href="#miniCart" class="header-action-item toolbar-btn">
                            <i class="icon-rt-basket-outline"></i>
                            <span class="wishlist-count" id="cart-count">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('site/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script>
    $(function() {
        var cart = new Cart('product');
        cart_load();
        $("#cart-count").html(get_cart_count());
    })

    function get_cart_count() {

        var cart = new Cart('product');
        if (cart.getCart() != null) {
            return cart.getCart().length;
        }
    }
    function cart_load(){
        $("#cart-count").html(get_cart_count());
    }
</script>