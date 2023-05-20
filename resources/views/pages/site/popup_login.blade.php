
<div class="header-login-register-wrapper modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-logo">
                <a href="#">
                    <img src="assets/images/logo.png" alt="">
                </a>
            </div>
            <div class="modal-box-wrapper">
                <div class="modal-tabs">
                    <ul class="nav" role="tablist">
                        <li class="tab__item nav-item active">
                            <a class="nav-link active" data-bs-toggle="tab" href="#tab_list_06" role="tab">Login</a>
                        </li>
                        <li class="tab__item nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab_list_07" role="tab">Register</a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content content-modal-box">
                    <div class="tab-pane fade show active" id="tab_list_06" role="tabpanel">
                        <form action="{{route('auth')}}" class="account-form-box" method="post">
                        @csrf
                            <div class="single-input">
                                <label for="username">Username or email address *</label>
                                <input type="text"  id="username" name="username">
                            </div>
                            <div class="single-input">
                                <label for="password">Password *</label>
                                <input type="password" id="password" name="password">
                            </div>
                            <div class="checkbox-wrap mt-10">
                                <label class="label-for-checkbox inline mt-15">
                                    <input class="input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
                                </label>
                                <a href="#" class=" mt-10" >Lost your password?</a>
                            </div>
                            <div class="button-box mt-25">
                                <input class="btn btn--full btn--primary" value="Login" type="submit" name="btnLogin" >
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="tab_list_07" role="tabpanel">

                        <form action="{{route('customers.store')}}" method="post" class="account-form-box">
                            @csrf
                            <div class="single-input">
                                <label for="reg_username">Username *</label>
                                <input type="text"name="name" id="name">
                            </div>
                            <div class="single-input">
                                <label for="reg_email">Email address *</label>
                                <input type="text" name="email" id="email" >
                            </div>
                            <div class="single-input">
                                <label for="reg_password">Password *</label>
                                <input type="password" name="password" id="password">
                            </div>
                            <p class="reg_text">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="#" class="privacy-policy-link" target="_blank">privacy policy</a>.</p>
                            <div class="button-box mt-25">
                            <input type="submit" class="btn btn--primary" onclick="ok()" value="Register" />
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function ok(){
        alert("Registration is successfull");
    }
</script>
