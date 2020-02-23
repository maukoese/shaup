@extends('layouts.app')
<title>@yield('title') - {{ config('app.name', 'Laravel') }}</title>
@section('content')
<div class="gap no-bottom">
    <div class="search-found">
      <h1>@yield('code')</h1>
      <span>@yield('title')</span>
      <p>@yield('message')</p>
      <a class="home-btn" href="{{url('/')}}" title="">Back To Home</a> </div>
  </div>
@endsection
