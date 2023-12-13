@extends('layouts.frontend.masuk')

@section('content')
<!-- content start -->
<style>
.body {
  background-image: url('{{ asset('frontend/img/ptn-2.jpg') }}');
  background-size: cover;
  background-repeat: no-repeat;
  position: center;
  height: 500px;
  background-position: center;
}
.form {
  display: flex;
  flex-direction: column;
  gap: 10px;
  max-width: 350px;
  padding: 20px;
  border-radius: 20px;
  position: relative;
  /* background-color: #1a1a1a; */
  color: #fff;
  border: 1px solid #333;
  backdrop-filter: blur(6px) saturate(180%) grayscale(3%);
}

.title {
  font-size: 28px;
  font-weight: 600;
  letter-spacing: -1px;
  position: relative;
  display: flex;
  align-items: center;
  padding-left: 30px;
  color: #00bfff;
}

.title::before {
  width: 18px;
  height: 18px;
}

.title::after {
  width: 18px;
  height: 18px;
  animation: pulse 1s linear infinite;
}

.title::before,
.title::after {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  border-radius: 50%;
  left: 0px;
  background-color: #00bfff;
}

.message, 
.signin {
  font-size: 14.5px;
  color: rgba(255, 255, 255, 0.7);
}

.signin {
  text-align: center;
}

.signin a:hover {
  text-decoration: underline royalblue;
}

.signin a {
  color: #00bfff;
}

.flex {
  display: flex;
  width: 100%;
  gap: 6px;
}

.form label {
  position: relative;
}

.form label .input {
  background-color: #333;
  color: #fff;
  width: 100%;
  padding: 20px 05px 05px 10px;
  outline: 0;
  border: 1px solid rgba(105, 105, 105, 0.397);
  border-radius: 10px;
}

.form label .input + span {
  color: rgba(255, 255, 255, 0.5);
  position: absolute;
  left: 10px;
  top: 0px;
  font-size: 0.9em;
  cursor: text;
  transition: 0.3s ease;
}

.form label .input:placeholder-shown + span {
  top: 12.5px;
  font-size: 0.9em;
}

.form label .input:focus + span,
.form label .input:valid + span {
  color: #00bfff;
  top: 0px;
  font-size: 0.7em;
  font-weight: 600;
}

.input {
  font-size: medium;
}

.submit {
  border: none;
  outline: none;
  padding: 10px;
  border-radius: 10px;
  color: #fff;
  font-size: 16px;
  transform: .3s ease;
  background-color: #00bfff;
}

.submit:hover {
  background-color: #00bfff96;
}

@keyframes pulse {
  from {
    transform: scale(0.9);
    opacity: 1;
  }

  to {
    transform: scale(1.8);
    opacity: 0;
  }
}
</style>
<body class="body">
<!-- <center>
<form class="form" method="post" action="{{ route('register') }}" id="registerForm" style="justify-content:center; margin-top: 100px;" >
{{ csrf_field() }}
    <p class="title">Register </p>
    <p class="message" style="color:white;">Signup now and get full access to our app. </p>
        <div class="flex">
        <label>
        <input type="text" class="form-control form-control-sm" placeholder="First Name"
            value="@if(!empty($name)){{ $name }}@else{{ old('first_name') }}@endif" name="first_name">
        @if ($errors->has('first_name'))
        <label class="error" for="first_name" style="color:white;">{{ $errors->first('first_name') }}</label>
        @endif
            <span>Firstname</span>
        </label>

        <label>
        <input type="text" class="form-control form-control-sm" placeholder="Last Name" value="{{ old('last_name') }}"
            name="last_name">
        @if ($errors->has('last_name'))
        <label class="error" for="last_name" style="color:white;">{{ $errors->first('last_name') }}</label>
        @endif
            <span>Lastname</span>
        </label>
    </div>  
            
    <label>
    <input type="text" class="form-control form-control-sm" placeholder="Email ID"
        value="@if(!empty($name)){{ $email }}@else{{ old('email') }}@endif" name="email">
    @if ($errors->has('email'))
    <label class="error" for="email" style="color:white;">{{ $errors->first('email') }}</label>
    @endif
        <span>Email</span>
    </label> 
        
    <label>
    <input type="password" class="form-control form-control-sm" placeholder="Password" name="password" id="password">
    @if ($errors->has('password'))
    <label class="error" for="password" style="color:white;">{{ $errors->first('password') }}</label>
    @endif
        <span>Password</span>
    </label>
    <label>
    <input type="password" class="form-control form-control-sm" placeholder="Confirm Password" name="password_confirmation">
    @if ($errors->has('password_confirmation'))
    <label class="error" for="password_confirmation" style="color:white;">{{ $errors->first('password_confirmation') }}</label>
    @endif
        <span>Confirm password</span>
    </label>
    <button class="submit" type="submit">Submit</button>
    <p class="signin" style="color:white;">Already have an acount ? <a href="{{route ('login')}}">Signin</a> </p>
</form>
</center> -->
<center>
<form class="form" method="POST" style="margin-top:100px;" action="{{ route('register') }}" id="registerForm">
    {{ csrf_field() }}>
    <p class="title">Register </p>
    <p class="message">Signup now and get full access to our app. </p>
        <div class="flex">
        <label>
            <input class="input" type="text" placeholder="" required="" value="@if(!empty($name)){{ $name }}@else{{ old('first_name') }}@endif" name="first_name">
            @if ($errors->has('first_name'))
            <label class="error" for="first_name">{{ $errors->first('first_name') }}</label>
            @endif
            <span>Firstname</span>
        </label>

        <label>
            <input class="input" type="text" placeholder="" required="" value="{{ old('last_name') }}" name="last_name">
            @if ($errors->has('last_name'))
            <label class="error" for="last_name">{{ $errors->first('last_name') }}</label>
            @endif
            <span>Lastname</span>
        </label>
    </div>  
            
    <label>
        <input class="input" type="email" placeholder="" required="" value="@if(!empty($name)){{ $email }}@else{{ old('email') }}@endif" name="email">
        @if ($errors->has('email'))
        <label class="error" for="email">{{ $errors->first('email') }}</label>
        @endif
        <span>Email</span>
    </label> 
        
    <label>
        <input class="input" type="password" placeholder="" required=""name="password" id="password">
        @if ($errors->has('password'))
        <label class="error" for="password">{{ $errors->first('password') }}</label>
        @endif
        <span>Password</span>
    </label>
    <label>
        <input class="input" type="password" placeholder="" required="" name="password_confirmation">
        @if ($errors->has('password_confirmation'))
        <label class="error" for="password_confirmation">{{ $errors->first('password_confirmation') }}</label>
        @endif
        <span>Confirm password</span>
    </label>
    <button class="submit" type="submit">Submit</button>
    <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
</form>
</center>
</body>
    <!-- content end -->
@endsection

@section('javascript')
<script type="text/javascript">
$(document).ready(function()
{
    $("#registerForm").validate({
            rules: {
                first_name: {
                    required: true
                },
                last_name: {
                    required: true
                },
                email:{
                    required: true,
                    email:true,
                    remote: "{{ url('checkUserEmailExists') }}"
                },
                password:{
                    required: true,
                    minlength: 6
                },
                password_confirmation:{
                    required: true,
                    equalTo: '#password'
                }
            },
            messages: {
                first_name: {
                    required: 'The fname field is required.'
                },
                last_name: {
                    required: 'The lname field is required.'
                },
                email: {
                    required: 'The email field is required.',
                    email: 'The email must be a valid email address.',
                    remote: 'The email has already been taken.'
                },
                password: {
                    required: 'The password field is required.',
                    minlength: 'The password must be at least 6 characters.'
                },
                password_confirmation: {
                    required: 'The password confirmation field is required.',
                    equalTo: 'The password confirmation does not match.'
                }
            }
        });

});
</script>
@endsection

@section('javascript')
<script type="text/javascript">
$(document).ready(function()
{
    $("#registerForm").validate({
            rules: {
                first_name: {
                    required: true
                },
                last_name: {
                    required: true
                },
                email:{
                    required: true,
                    email:true,
                    remote: "{{ url('checkUserEmailExists') }}"
                },
                password:{
                    required: true,
                    minlength: 6
                },
                password_confirmation:{
                    required: true,
                    equalTo: '#password'
                }
            },
            messages: {
                first_name: {
                    required: 'The fname field is required.'
                },
                last_name: {
                    required: 'The lname field is required.'
                },
                email: {
                    required: 'The email field is required.',
                    email: 'The email must be a valid email address.',
                    remote: 'The email has already been taken.'
                },
                password: {
                    required: 'The password field is required.',
                    minlength: 'The password must be at least 6 characters.'
                },
                password_confirmation: {
                    required: 'The password confirmation field is required.',
                    equalTo: 'The password confirmation does not match.'
                }
            }
        });

});
</script>
@endsection