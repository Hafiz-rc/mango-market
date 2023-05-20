<div class="header-top-area  border-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="header-top-left-area">
                                <p class="header-top-text-message"> </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="header-top-right-area header-top-settings">

                                <ul class="nav align-items-center">
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
                                    <li class="curreny-wrap">Currency <i class="icon-rt-arrow-down"></i>
                                        <ul class="dropdown-list curreny-list">
                                            <li><a href="#">$ USD</a></li>
                                            <li><a href="#"> € EURO</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>