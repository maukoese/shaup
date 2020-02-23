@extends('layouts.auth')
@php($title = __('Register Now'))
@section('content')
<h4>Create Merchant Account</h4>
<span>Please enter your user information</span>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <input type="hidden" name="role" value="merchant">

    <label><i class="fa fa-user"></i></label>
    <input id="name" placeholder="Full Name" type="text" class="@error('name') is-invalid @enderror" name="name"
        value="{{ old('name') }}" required autocomplete="name" autofocus>

    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label><i class="fa fa-shopping-cart"></i></label>
    <input id="sname" placeholder="Shop Name" type="text" class="@error('sname') is-invalid @enderror" name="shop[name]"
        value="{{ old('sname') }}" required autocomplete="name" autofocus>

    @error('sname')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label><i class="fa fa-map"></i></label>
    <input id="sloc" placeholder="Shop Location" type="text" class="@error('sloc') is-invalid @enderror"
        name="shop[location]" value="{{ old('sloc') }}" required autocomplete="name" autofocus>

    @error('sloc')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label><i class="fa fa-envelope"></i></label>
    <input id="email" placeholder="Email Address" type="email" class="@error('email') is-invalid @enderror" name="email"
        value="{{ old('email') }}" required autocomplete="email">

    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label><i class="fa fa-phone"></i></label>
    <input id="phone" placeholder="Phone Number" type="phone" class="@error('phone') is-invalid @enderror" name="phone"
        value="{{ old('phone') }}" required autocomplete="phone">

    @error('phone')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label><i class="fa fa-lock"></i></label>
    <input id="password" placeholder="Account Password" type="password" class="@error('password') is-invalid @enderror"
        name="password" required autocomplete="new-password">

    @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror

    <label><i class="fa fa-lock"></i></label>
    <input id="password-confirm" placeholder="Confirm Password" type="password" class="" name="password_confirmation"
        required autocomplete="new-password">

    <button type="submit" class="">
        {{ __('Register') }}
    </button>
</form>
<span class="">Already have an account? <a class="text-primary fw-500" href="{{url('login')}}">Sign in</a></span>
@endsection
