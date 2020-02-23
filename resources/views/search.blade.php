@extends('layouts.app')

@section('content')
<div class="card card-shadowed">
    <form class="lookup lookup-huge">
        <input class="no-radius no-border" type="text" placeholder="Try searching for button, checkbox or gallery..." name="s"
            value="{{$s}}">
    </form>
</div>

<div class="card card-body">
    <div class="row gap-y">
        @foreach ($results as $table => $data)
@if (count($data)> 0 )

<div class="col-md-6 col-lg-3">
    <h6 class="fs-10 text-uppercase letter-spacing-3 p-20">
        <span class="ti-list text-muted pr-1"></span>
        <span>{{ucfirst($table)}}</span>
        <span class="pl-10 text-muted">({{count($data)}})</span>
    </h6>

    <div class="media-list media-list-divided media-list-hover">
        @foreach ($data as $item)
        <a class="media" href='{{url("$table/$item->id")}}'>
            <div class="media-body">
                <h6 class="fs-13 lh-1">{{$item->name}}</h6>
                <p class="fs-12 text-truncate">{{$item->details}}</p>
            </div>
        </a>
        @endforeach
    </div>
</div>
@endif

        @endforeach



    </div>
</div>
@endsection

@section('extra')

@endsection
