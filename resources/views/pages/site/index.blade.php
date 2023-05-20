@extends('layout.site.app')
@section('content')
<section class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h1 class="page-title"> Login</h1>
                    <ul class="breadcrumb-page-list">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item">Login</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="page-secton-wrapper section-space-ptb">
    <div class="container" style="padding-left: 150px;">
        <div class="row gx-5">
            <div class="col-md-8">
                <div class="title mb-3" style="display:flex; align-items:space-between ">
                    <div class="fw-bold"><h6>Welcome to Mango Market! Please login.</h6></div>
                   <div class="pl-5" style="padding-left: 160px;"> <h6> New member? <a href="{{url('register')}}" style="color:green">Register</a> here.<h6></div>
                </div> 

               
                <div class=" content-modal-box p-5 border">
                    <form action="{{route('auth')}}" method="post" class="account-form-box">
                        @csrf
                        <div class="single-input">
                            <label for="username">Username or email or Mobile *</label>
                            <input type="text" id="username" name="username">
                        </div>
                        <div class="single-input">
                            <label for="password">Password *</label>
                            <input type="password" id="password" name="password">
                        </div>
                        <div class="checkbox-wrap mt-10">
                            <label class="label-for-checkbox inline mt-15">
                                <input class="input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> <span>Remember me</span>
                            </label>
                            <a href="#" class="mt-10">Lost your password?</a>
                        </div>
                        <div class="button-box mt-4">
                            <input type="submit" href="#" name="" class="btn btn--primary px-3" >
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection