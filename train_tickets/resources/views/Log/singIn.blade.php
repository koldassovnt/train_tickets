@extends('Log.layout.app')

@section('title')
Sign In
@endsection
@include('include.header')
@section('content')

<div class="main">

 <!-- Sing in  Form -->
 <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="https://i2-prod.leicestermercury.co.uk/incoming/article4462808.ece/ALTERNATES/s1200/3_East-Midlands-Rialway.jpg" alt="sing in image"></figure>
                        <a href="#" class="signup-image-link">Create an account</a>
                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>

                        <form method="POST" action="{{ route('login.store') }}" class="register-form" id="login-form">
                            @csrf
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                            <br><br>
                            {{-- @include('partials.formerrors') --}}
                        </form>
                        
                        

                        <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                              
                                <li><a href="{{ route('social.oauth', 'github') }}"><i class="display-flex-center zmdi zmdi-github"></i></a></li>
                                <li><a href="{{ route('social.oauth', 'google') }}"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</div>


    @endsection

