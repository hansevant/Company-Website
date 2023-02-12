<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="{{ asset('assets/img/favico.png') }}" rel="icon" />
    <link href="{{ asset('assets/img/logo.png') }}" rel="apple-touch-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/login_writer.css') }}">
    <title>
        Login Writer | Blog
    </title>
</head>
<body>
    {{-- Login Container --}}
    <div class="login-container">
        {{-- Login Form --}}
        <div class="login-form">
            {{-- Logo Career Network --}}
            <img src="{{ asset('assets/img/logo.png') }}" alt="" width="174" height="93" />
            {{-- Heading Form --}}
            <div class="heading">
                <h1 class="header">Log In</h1>
                <p class="sub-header">Welcome to Career Network</p>
            </div>
            {{-- Form --}}
            <form action="" method="post">
                {{-- Email --}}
                <div class="form-input">
                    <p class="label-input">Email Address</p>
                    <input type="email" name="email" id="email" placeholder="Your E-mail Address">
                </div>
                {{-- Password --}}
                <div class="form-input">
                    <p class="label-input">Password</p>
                    <div class="password-input">
                        <input type="password" name="password" id="password" placeholder="Type your password">
                    </div>
                </div>
                {{-- Remember Me --}}
                <div class="remember-me">
                    <span class="checkbox-input"><input type="checkbox" name="remember-me" id="remember-me">Remember Me</span>
                    <a href="">Forgot Password?</a>
                </div>
                {{-- Login Button --}}
                <button class="login-btn">
                    Log In
                </button>
            </form>
            {{-- Link --}}
            <p class="account-link">Don't have an account? <a class="sign-up" href="">Sign Up</a></p>
            {{-- Socials Media --}}
            <div class="socials">
                <p>Ikuti Kami</p>
                <div class="socials-link">    
                    <a href=""><img alt="" src="{{ asset('assets/img/login-writer/socials/Twitter.svg') }}" /></a>
                    <a href="https://www.linkedin.com/company/career-network-id/"><img alt="" src="{{ asset('assets/img/login-writer/socials/Linkedin.svg') }}" /></a>
                    <a href="https://www.instagram.com/careernetwork.id/"><img alt="" src="{{ asset('assets/img/login-writer/socials/Instagram.svg') }}" /></a>
                    <a href=""><img alt="" src="{{ asset('assets/img/login-writer/socials/Facebook.svg') }}" /></a>
                </div>
            </div>
        </div>

        {{-- Login Hero --}}
        <div class="login-hero">
            {{-- Heading --}}
            <div class="heading-hero">
                <h1 class="header-hero">Ayo Tumbuh Bersama Kami!</h1>
                <p class="subheader-hero">Enter your credential to access your account</p>
            </div>
            {{-- Illustration --}}
            <img class="img-up" alt="" src="{{ asset('assets/img/login-writer/hero-image.png') }}" />
            {{-- Slogan Hero --}}
            <div class="slogan-text">
                Hadirkan peluang signifikan untuk meningkatkan pertumbuhan pribadi Anda.
            </div>
        </div>
    </div>
</body>
</html>