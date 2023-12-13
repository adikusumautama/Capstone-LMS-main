@extends('layouts.frontend.masuk')
<style>
    body {
        background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img3.webp');
        background-size: cover;
        height: 100%;
        background-position: 0 -100;
        background-repeat: no-repeat;
    }

    .login-box {
        position: absolute;
        top: 50%;
        left: 50%;
        width: 400px;
        padding: 40px;
        transform: translate(-50%, -50%);
        background: rgba(24, 20, 20, 0.987);
        box-sizing: border-box;
        box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
        border-radius: 10px;
        /* Bikin opacity background */
        opacity: .9;
        /* Bikin backdrop-filter blur */
        backdrop-filter: blur(10px) saturate(180%) grayscale(3%);
    }

    .login-box .user-box {
        position: relative;
    }

    .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
    }

    .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        pointer-events: none;
        transition: .5s;
    }

    .login-box .user-box input:focus~label,
    .login-box .user-box input:valid~label {
        top: -20px;
        left: 0;
        color: #bdb8b8;
        font-size: 12px;
    }

    .login-box form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #ffffff;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
    }

    /* .login-box a:hover {
        background: #03f40f;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03f40f,
            0 0 25px #03f40f,
            0 0 50px #03f40f,
            0 0 100px #03f40f;
    } */
    .login-box .cuy:hover {
        background: #03f40f;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #03f40f,
            0 0 25px #03f40f,
            0 0 50px #03f40f,
            0 0 100px #03f40f;
    }

    .login-box .coy:hover {
        background: red;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px red,
            0 0 25px red,
            0 0 50px red,
            0 0 100px red;
    }

    .login-box a span {
        position: absolute;
        display: block;
    }

    @keyframes btn-anim1 {
        0% {
            left: -100%;
        }

        50%,
        100% {
            left: 100%;
        }
    }

    /* .login-box a span:nth-child(1) {
        bottom: 2px;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #03f40f);
        animation: btn-anim1 2s linear infinite;
    } */
    .login-box .masuk:nth-child(1) {
        bottom: 2px;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, #03f40f);
        animation: btn-anim1 2s linear infinite;
    }

    .login-box .daftar:nth-child(1) {
        bottom: 2px;
        left: -100%;
        width: 100%;
        height: 2px;
        background: linear-gradient(90deg, transparent, red);
        animation: btn-anim1 2s linear infinite;
    }
</style>
<div class="login-box">
    <form id="loginForm" class="form-horizontal" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="user-box">
            <label>Email</label>
            <input type="text" name="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
            <label class="error" for="email">{{ $errors->first('email') }}</label>
            @endif
        </div>
        <div class="user-box">
            <label>Password</label>
            <input type="password" name="password" value="{{ old('password') }}">
            @if ($errors->has('password'))
            <label class="error" for="password">{{ $errors->first('password') }}</label>
            @endif
        </div>
        <center>
            <button class="cuy" href="#" style="margin-right: 1rem">
                LOGIN
                <span class="masuk"></span>
            </button>
            <button class="coy" href="#">
                <a href="">
                    REGISTER
                    <span class="daftar"></span>
                </a>
            </button>
        </center>
    </form>
</div>

@section('javascript')
<script type="text/javascript">
    $(document).ready(function () {
        $("#loginForm").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true
                }
            },
            messages: {
                email: {
                    required: 'The email field is required.',
                    email: 'The email must be a valid email address.'
                },
                password: {
                    required: 'The password field is required.'
                }
            }
        });

    });
</script>
@endsection