@extends('layouts.auth')

@section('content')
<div class="card card-shadowed px-50 py-30 w-400px mx-auto" style="max-width: 100%">
    <h5 class="text-uppercase">{{ __('Welcome Back')}}</h5>
    <br>
    <form class="form-type-material" method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group">

            <div class="">
                <input id="email" type="email" placeholder="Email Address"
                    class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group">

            <div class="">
                <input id="password" placeholder="Account Password" type="password"
                    class="form-control @error('password') is-invalid @enderror" name="password" required
                    autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
            <div class="">
                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control"
                    name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="form-group mb-0">
            <button type="submit" class="btn btn-primary">
                {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</div>
@endsection
