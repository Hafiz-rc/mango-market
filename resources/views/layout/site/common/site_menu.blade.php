<div class="header-bottom-area bg-secondary header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <div class="categories-menu-wrap_box">
                                <div class="categories_menu">
                                    <div class="categories_title">
                                        <h5 class="categori_toggle"><i class="icon-rt-bars-solid"></i> Categories</h5>
                                    </div>
                                    <div class="categories_menu_toggle">
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
                        <div class="col-lg-9">
                            <div class="main-menu-area white_text">
                                <!--  Start Mainmenu Nav-->
                                <nav class="main-navigation">
                                 
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
                        </div>
                    </div>
                </div>
            </div>