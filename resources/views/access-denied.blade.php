@extends('layouts.app')

@section('content')
<div class="gap no-bottom">
    <div class="page5o5">
      <div class="avatar5o5"> <img src="images/resources/505.svg" alt=""> </div>
      <div class="info5o5">
        <div class="fixed-bg" style="background-image:url(images/resources/505-bg.png); background-repeat: no-repeat;"></div>
        <h1>5<span>0</span>5</h1>
        <span>ooops....</span> <em>Sorry internal server error</em>
        <p>It seems we can't find what you're looking for. Perhaps searching can help or go <a href="/" title="">Back To Homepage</a></p>
        <form method="post">
          <input type="text" placeholder="Enter your keyword">
          <button type="submit"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </div>
@endsection

@section('extra')

@endsection
