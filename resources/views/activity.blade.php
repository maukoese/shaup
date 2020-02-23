@extends('layouts.app')

@section('content')
<div class="media-list media-list-divided media-list-hover" data-provide="selectall">

    <div class="media-list-body bg-white b-1">
      <div class="media align-items-center">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input">
          <label class="custom-control-label"></label>
        </div>

        <label class="toggler ml-20 fs-16">
          <input type="checkbox">
          <i class="fa fa-star"></i>
        </label>

        <span class="badge badge-dot badge-danger"></span>

        <a href="#"><img class="avatar" src="../assets/img/avatar/1.jpg" alt="..."></a>

        <a class="media-body text-truncate" href="mailbox-single.html">
          <h6>Maryam Amiri</h6>
          <small>
            <strong>Happy Christmas!</strong>
            <span class="fw-300 opacity-80">Conveniently parallel task wireless convergence before goal-oriented human capital.</span>
          </small>
        </a>

        <a class="text-lighter fs-18 opacity-0" href="#"><i class="ti-clip"></i></a>

        <time datetime="2018">12:35 AM</time>
      </div>

    </div>


    <footer class="flexbox align-items-center py-20">
      <span class="flex-grow text-right text-lighter pr-2">1-20 of 367</span>
      <nav>
        <a class="btn btn-sm btn-square disabled" href="#"><i class="ti-angle-left"></i></a>
        <a class="btn btn-sm btn-square" href="#"><i class="ti-angle-right"></i></a>
      </nav>
    </footer>

  </div>

@endsection

@section('extra')

@endsection
