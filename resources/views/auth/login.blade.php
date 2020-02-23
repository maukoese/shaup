@extends('layouts.auth')
@php($title = __('Welcome Back'))
@section('content')

<h4>Sign In Account</h4>
<span>Please enter your user information</span>
<form class="form-type-material" method="POST" action="{{ route('login') }}">
    @csrf
    <label><i class="fa fa-envelope"></i></label>
    <input id="email" placeholder="E-mail or Phone Number" type="text" class=" @error('email') is-invalid @enderror"
        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <label><i class="fa fa-unlock-alt"></i></label>
    <input id="password" placeholder="Account Password" type="password" class=" @error('password') is-invalid @enderror"
        name="password" required autocomplete="current-password">

    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    <input type="checkbox" id="remember" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    <label for="remember">Remember Me <a class="text-muted hover-primary fs-13 mt-2 mt-md-0"
            href="{{ route('password.request') }}">Forgot password?</a></label>
    <button type="submit">sign in</button>
</form>
<span>Don't have an account? <a href="{{url('register')}}" title="">Sign up</a></span>

@endsection
