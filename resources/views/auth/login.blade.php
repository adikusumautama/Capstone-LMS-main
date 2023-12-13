<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        * {
            font-family: 'Poppins' !important;
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

        .login-box form button {
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
            letter-spacing: 4px;
            border: none;
        }

        .login-box .log-in:hover {
            background: #03f40f !important;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #03f40f,
                0 0 25px #03f40f,
                0 0 50px #03f40f,
                0 0 100px #03f40f;
        }

        .login-box .daftar:hover {
            background: red !important;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px red,
                0 0 25px red,
                0 0 50px red,
                0 0 100px red;
        }

        .login-box button span {
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

        .login-box .log-in .span-login:nth-child(1) {
            bottom: 2px;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #03f40f);
            animation: btn-anim1 2s linear infinite;
        }

        .login-box .daftar .span-daftar:nth-child(1) {
            bottom: 2px;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, red);
            animation: btn-anim1 2s linear infinite;
        }
    </style>
</head>

<body
    style="background-image: url('{{ asset('frontend/img/ptn-2.jpg') }}'); background-size: cover; position: center; background-size: 100%;">
    <div class="login-box">
        <h1 style="color: white;">Login</h1>

        <form id="loginForm" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="user-box">
                <input type="text" name="email" value="{{ old('email') }}" placeholder="Email">
                @if ($errors->has('email'))
                <label for="email">{{ $errors->first('email') }}</label>
                @endif
            </div>
            <div class="user-box">
                <input type="password" name="password" value="{{ old('password') }}" placeholder="Password">
                @if ($errors->has('password'))
                <label class="error" for="password">{{ $errors->first('password') }}</label>
                @endif
            </div>
            <center>
                <div type="submit" class="container" style="gap: 0.5rem !important;">
                    <button type="submit" class="log-in" style="background-color: rgba(24, 20, 20, 0.987);">
                        Login
                        <span class="span-login"></span>
                    </button>
                    <button type="button" class="daftar" style="background-color: rgba(24, 20, 20, 0.987);" onclick="window.location.href='{{ route('register') }}'">
                        Register
                        <span class="span-daftar"></span>
                    </button>
                </div>
            </center>
        </form>
    </div>
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
</body>

</html>