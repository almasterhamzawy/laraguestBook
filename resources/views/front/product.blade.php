@extends('front.main')


@section('content')
<div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-header">
                            <h1>Product Info</h1>
                        </div>
                    </div>
                </div>
                <div class="row product-info">
                    <div class="col-md-8">
                        <div class="product-info__title">
                            <h2>{{$product->title}}</h2>
                        </div>
                        <div class="product-info__price">
                            <strong>Product Price:</strong> <span>{{$product->price}}<sup>EGP</sup></span>
                        </div>
                        <div class="product-info__available">
                            <strong>Product Availability:</strong> <span>{{($product->available == 1)? 'Available':'Not Available'}}</span>
                        </div>
                        <div class="product-info__desc">
                            <h2>Product Description:</h2>
                            <p>{{$product->description}}</p>
                        </div>
                        <br />
                        <a href="#" class="btn btn-lg btn-danger"><i class="fa fa-shopping-cart"></i> Buy Now</a>
                    </div>
                    <div class="col-md-4">
                        <div class="product-info__image">
                            <img src="{{asset('resources')}}/assets/images/abstract-q-c-380-380-10.jpg" class="img-responsive" alt="">
                        </div>
                    </div>
                </div>
            </div>
@stop