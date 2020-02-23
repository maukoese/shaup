@extends('layouts.app')

@section('content')
<div class="gap no-gap">
    <div class="inner-bg">
        <div class="row remove-70">
            <div class="col-md-4 col-sm-4">
                <div class="woo-product">
                    <figure> <img src="{{asset('images/resources/product-1.jpg')}}" alt=""> </figure>
                    <div class="product-meta">
                        <div class="starz-rating"> <span class="fa fa-star-o"></span> <span
                                class="fa fa-star-o "></span> <span class="fa fa-star-o "></span> <span
                                class="fa fa-star-o "></span> <span class="fa fa-star-o"></span> </div>
                        <h4><a href="product-detail.html" title="">Kraus Brazillian Teak</a></h4>
                        <span> <span class="ok-price">$230.00</span> <span class="del-price">$250.00</span> </span>
                        <ul class="add-cart">
                            <li><a href="#" title=""><i class="fa fa-refresh"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-shopping-basket"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="woo-product">
                    <figure> <img src="images/resources/product-2.jpg" alt=""> </figure>
                    <div class="product-meta">
                        <div class="starz-rating"> <span class="fa fa-star-o"></span> <span
                                class="fa fa-star-o "></span> <span class="fa fa-star-o "></span> <span
                                class="fa fa-star-o "></span> <span class="fa fa-star-o"></span> </div>
                        <h4><a href="product-detail.html" title="">Kraus Colonial Oak</a></h4>
                        <span> <span class="ok-price">$190.00</span> <span class="del-price">$210.00</span> </span>
                        <ul class="add-cart">
                            <li><a href="#" title=""><i class="fa fa-refresh"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-shopping-basket"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="woo-product">
                    <figure> <img src="images/resources/product-3.jpg" alt=""> </figure>
                    <div class="product-meta">
                        <div class="starz-rating"> <span class="fa fa-star-o"></span> <span
                                class="fa fa-star-o "></span> <span class="fa fa-star-o "></span> <span
                                class="fa fa-star-o "></span> <span class="fa fa-star-o"></span> </div>
                        <h4><a href="product-detail.html" title="">Kraus Golden Sadle</a></h4>
                        <span> <span class="ok-price">$179.00</span> <span class="del-price">$190.00</span> </span>
                        <ul class="add-cart">
                            <li><a href="#" title=""><i class="fa fa-refresh"></i></a></li>
                            <li><a href="#" title=""><i class="fa fa-shopping-basket"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra')

@endsection
