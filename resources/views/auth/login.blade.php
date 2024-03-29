@extends('layouts.app')
@section('title', 'Sign In')
@section('content')  
<!--====== App Content ======-->
<div class="app-content">

<!--====== Section 1 ======-->
<div class="u-s-p-y-60">

    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="container">
            <div class="breadcrumb">
                <div class="breadcrumb__wrap">
                    <ul class="breadcrumb__list">
                        <li class="has-separator">

                            <a href="index.html">Home</a></li>
                        <li class="is-marked">

                            <a href="signin.html">Signin</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--====== End - Section 1 ======-->


<!--====== Section 2 ======-->
<div class="u-s-p-b-60">

    <!--====== Section Intro ======-->
    <div class="section__intro u-s-m-b-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__text-wrap">
                        <h1 class="section__heading u-c-secondary">ALREADY REGISTERED?</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Intro ======-->


    <!--====== Section Content ======-->
    <div class="section__content">
        <div class="container">
            <div class="row row--center">
                <div class="col-lg-6 col-md-8 u-s-m-b-30">
                    <div class="l-f-o">
                        <div class="l-f-o__pad-box">
                            
                            <h1 class="gl-h1">SIGNIN</h1>

                            <span class="gl-text u-s-m-b-30">If you have an account with us, please log in.</span>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                
                                <div class="u-s-m-b-30">

                                    <label class="gl-label" for="login-email">E-MAIL *</label>

                                    <input class="input-text input-text--primary-style" name="email" type="email" id="email" placeholder="Enter E-mail"></div>
                                <div class="u-s-m-b-30">

                                    <label class="gl-label" for="login-password">PASSWORD *</label>

                                    <input class="input-text input-text--primary-style" name="password" type="password" id="password" placeholder="Enter Password"></div>
                                <div class="gl-inline">
                                    <div class="u-s-m-b-30">

                                        <button class="btn btn-secondary btn--e-transparent-brand-b-2" type="submit">Sign In</button></div>
                                    <div class="u-s-m-b-30">

                                        <a class="gl-link" href="{{ route('password.request') }}">Lost Your Password?</a></div>
                                </div>
                                <div class="u-s-m-b-30">

                                    <!--====== Check Box ======-->
                                    <div class="check-box">

                                        <input type="checkbox" name="remember" id="remember-me">
                                        <div class="check-box__state check-box__state--primary">

                                            <label class="check-box__label" for="remember-me">Remember Me</label></div>
                                    </div>
                                    <!--====== End - Check Box ======-->
                                </div>
                                <div class="gl-s-api">
                                    <div class="u-s-m-b-15">

                                        <a href="{{url('login/facebook/redirect')}}" class="gl-s-api__btn gl-s-api__btn--fb" type="button"><i class="fab fa-facebook-f"></i>

                                            <span>Signin with Facebook</span>
                                        </a>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <a href="{{url('login/github/redirect')}}" style="background: black !important;" class="gl-s-api__btn btn-info gl-s-api__btn--gplus" type="button"><i class="fab fa-github"></i>

                                            <span>Signin with Github</span>
                                        </a>
                                    </div>
                                    <div class="u-s-m-b-15">

                                        <a href="{{url('login/google/redirect')}}" class="gl-s-api__btn gl-s-api__btn--gplus" type="button"><i class="fab fa-google"></i>

                                            <span>Signin with Google</span>
                                        </a>
                                    </div>
                                </div>
                            </form>
                            <h1 class="gl-h1">I'M NEW CUSTOMER</h1>

                            <span class="gl-text u-s-m-b-30">By creating an account with our store, you will be able to move through the checkout process faster, store shipping addresses, view and track your orders in your account and more.</span>
                            <div class="u-s-m-b-15">

                                <a class="l-f-o__create-link btn--e-transparent-brand-b-2" href="{{url('register')}}">CREATE AN ACCOUNT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Content ======-->
</div>
<!--====== End - Section 2 ======-->
</div>










@endsection