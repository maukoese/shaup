@extends('layouts.app')
<div class="row">
    <div class="col-lg-12 col-md-12 card card-shadowed">
        <div style="width: 100% height: 100vh;" id="fm"></div>
    </div>
</div>
@section('content')
@endsection

@section('extra')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">

<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
@endsection
