@extends('layout.site.app')
<style>

 </style>
@section('content')
        <section class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <h1 class="page-title"> Registration</h1>
                            <ul class="breadcrumb-page-list">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item">Registration</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="page-secton-wrapper section-space-ptb">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-md-8 display">
                    <div class="title mb-3" style="display:flex; align-items:space-between ">
                    <div class="fw-bold"><h6>Create your Mango Market Account.</h6></div>
                   <div class="pl-5" style="padding-left: 160px;"> <h6> Already member? <a href="{{url('login')}}" style="color:green">Login</a> here.<h6></div>
                </div> 

                        <div class=" content-modal-box  p-5 border">
                            <form action="{{route('customers.store')}}" method="post"class="account-form-box">
                                @csrf
                                <div class="single-input">
                                    <label for="reg_username">Username *</label>
                                    <input type="text" name="name" id="name">
                                </div>
                                <div class="single-input">
                                    <label for="reg_email">Email address *</label>
                                    <input type="text" name="email" id="email">
                                </div>
                                <div class="single-input">
                                    <label for="reg_password">Password *</label>
                                    <input type="password" name="password" id="password">
                                </div>
                                <p class="reg_text text">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href="privacy-policy.html" class="privacy-policy-link" target="_blank">privacy policy</a>.</p>
                                <div class="button-box mt-4">
                                    <input type="submit" class="btn btn--primary" onclick="ok()" value="Register" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection

<script>
    function ok(){
        alert("Registration is successfull");
    }
</script>

