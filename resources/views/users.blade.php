@extends('layouts.app')

@section('content')
<div class="gap no-gap">
    <div class="inner-bg">
        <table class="cart-table table table-responsive">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Name</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>status</th>
                    @if(auth()->user()->role == 'admin')
                    <th>action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($records as $record)
                <tr>
                    <td>{{$record->id}}</td>
                    <td><img src="{{$record->avatar}}" alt="{{$record->name}}" class="rounded" width="50px" style="border-radius: 50%"> {{$record->name}}</td>
                    <td>{{$record->phone}}</td>
                    <td>{{$record->email}}</td>
                    <td>{!! $record->verified ? '<span class="paid">Verified</span>' : '<span class="failed">Unverified</span>' !!}</td>
                    {{-- paid --}}

                    @if(auth()->user()->role == 'admin')
                    <td><a href="#" title=""><i class="icon-trash"></i></a> <a href="#" title=""><i
                                class="icon-pencil"></i></a></td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('extra')

@endsection
