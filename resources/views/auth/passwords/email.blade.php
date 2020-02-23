@extends('layouts.auth')

@section('content')
<div class="card card-shadowed px-50 py-30 w-400px mx-auto" style="max-width: 100%">
    <h5 class="text-uppercase">{{ __('Reset Password')}}</h5>
    <br>
    <form class="form-type-material" method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-group">
            <div class="">
                <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group mb-0">
            <button type="submit" class="btn btn-bold btn-block btn-primary">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </form>
</div>
@endsection
