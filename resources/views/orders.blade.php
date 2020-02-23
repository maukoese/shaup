@extends('layouts.app')

@section('content')
<div class="gap no-gap">
    <div class="inner-bg">
        <table class="cart-table table table-responsive">
            <thead>
                <tr>
                    <th>Order ID </th>
                    <th>customer</th>
                    <th>photo</th>
                    <th>product</th>
                    <th>qty</th>
                    <th>status</th>
                    @if(auth()->user()->role == 'admin')
                    <th>action</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#225801</td>
                    <td>Tim Sebastian</td>
                    <td><img src="images/resources/prod-cart-1.jpg" alt=""></td>
                    <td>Still Gray Chair</td>
                    <td>61</td>
                    <td><span class="failed">Failed</span></td>
                    {{-- paid --}}

                    @if(auth()->user()->role == 'admin')
                    <td><a href="#" title=""><i class="icon-trash"></i></a> <a href="#" title=""><i
                                class="icon-pencil"></i></a></td>
                    @endif
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('extra')

@endsection
